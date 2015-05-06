<?php

class Guide
{

  /**
   * @return array
   * @author Andrew Haswell
   */

  static function parse_gig_guide($file)
  {
    $gig_list = trim(file_get_contents($file));

    if (!empty($gig_list)) {
      $gig_list = explode("\n", $gig_list);
    }

    $gig_counter = 0;
    $gigs = [];

    foreach ($gig_list as $key => $gig_list_row) {
      if (empty(trim($gig_list_row))) {
        $gig_counter++;
        continue;
      }
      if (substr($gig_list_row, 0, 10) == '----------') {
        $other_data_start = $key;
        break;
      }
      $gigs[$gig_counter][] = trim($gig_list_row);
    }

    $gigs = array_filter($gigs, array('guide',
                                      'remove_months'));

    $gigs = self::format_gig_guide($gigs);

    $other_data = array_slice($gig_list, $other_data_start + 3);

    $cover_gig_counter = 0;
    $cover_gigs = [];

    foreach ($other_data as $cover_gig) {

      if (substr($cover_gig, 0, 10) == '----------') {
        $cover_gig_counter++;
        continue;
      } else if (!empty(trim($cover_gig))) {
        $cover_gigs[$cover_gig_counter][] = trim($cover_gig);
      }
    }

    $cover_gigs = self::format_cover_gigs($cover_gigs);

    return ['gigs'       => $gigs,
            'cover_gigs' => $cover_gigs];
  }

  /**
   * @param $array
   * @return bool
   * @author Andrew Haswell
   */

  static function remove_months($array)
  {
    return (count($array) < 2) ? false : true;
  }

  /**
   * @param array $gigs
   * @return array
   * @author Andrew Haswell
   */

  static function format_gig_guide($gigs = [])
  {
    $all_gigs = [];
    if (!empty($gigs) && is_array($gigs)) {

      foreach ($gigs as $gig) {

        $this_gig = [];

        $this_gig['date'] = array_shift($gig);

        $this_gig['date'] = self::date_passed($this_gig['date']);

        $details = array_pop($gig);
        $this_gig['venue'] = array_pop($gig);

        if ($facebook_junk = strpos($details, '###')) {
          $details = substr($details, 0, $facebook_junk);
        }

        $time_line = @explode('/', $details);
        if (is_array($time_line) && count($time_line) >= 3) {
          list($price, $this_gig['time'], $this_gig['contact']) = $time_line;
        } else {
          // TODO: Throw an error here
        }

        $price = (!empty($price)) ? trim(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $price)) : '';

        if (is_numeric($price)) {
          $this_gig['price'] = '&pound;' . number_format($price, 2);
        } else if (strpos(strtolower($price), 'free') !== false) {
          $this_gig['price'] = 'Free Entry';
        } else {
          preg_match('/^([0-9]*)(.*)/i', $price, $matches);
          if (!empty($matches[1])) {
            $price = '&pound;' . number_format($matches[1], 2);
            $this_gig['price'] = $price;
            if (!empty($matches[2])) {
              $this_gig['price'] .= ' ' . trim($matches[2]);
            }
          } else {
            $this_gig['price'] = $price;
          }
        }

        unset($details);

        $title = true;

        if (count($gig) >= 2) {
          if (preg_match('/\+\s*$/i', $gig[0]) || preg_match('/^\s*\+/i', $gig[1])) {
            $title = false;
          }
        } else {
          $title = false;
        }

        if ($title) {
          $this_gig['title'] = array_shift($gig);
        }

        // Check for subtitle

        $title = true;

        if (count($gig) >= 2) {
          if (preg_match('/\+\s*$/i', $gig[0]) || preg_match('/^\s*\+/i', $gig[1])) {
            $title = false;
          }
        } else {
          $title = false;
        }

        if ($title) {
          $this_gig['subtitle'] = array_shift($gig);
        }

        $bands = implode(' ', $gig);

        $band_list = array_map('trim', explode('+', $bands));

        $band_list = array_filter($band_list, function ($val) { return (!empty(trim($val))) ? true : false; });

        $band_list = self::validate_bands($band_list);

        $this_gig = array_map('trim', $this_gig);
        $this_gig['bands'] = $band_list;

        unset($title, $gig, $band_list);

        $all_gigs[] = $this_gig;
      }
    }
    return $all_gigs;
  }

  /**
   * @param $date
   * @return bool|string
   * @author Andrew Haswell
   */

  static function date_passed($date)
  {
    $temp_date = $date . ' ' . date('Y');

    if (strtotime('-3 months') > strtotime($temp_date)) {
      $date = $date . ' ' . ((int)date('Y') + 1);
    } else {
      $date = $temp_date;
    }

    return date("l jS F Y", strtotime($date));
  }

  /**
   * @param $bands_list
   * @return array
   * @author Andrew Haswell
   */

  static function validate_bands($bands_list)
  {
    $band_list = [];
    $band_list_with_keys = [];
    if (!empty($bands_list)) {
      foreach ($bands_list as $band) {
        if (empty($band)) {
          continue;
        }
        $band_list[] = trim(preg_replace('/\(.*\)/i', '', $band));
      }
    }

    foreach ($band_list as $band) {
      $band_list_with_keys[] = $band;
    }

    return $band_list_with_keys;
  }

  static function format_cover_gigs($gigs = [])
  {

    $all_gigs = [];

    if (!empty($gigs) && is_array($gigs)) {
      foreach ($gigs as $cover_gig) {
        $this_gig = [];

        $this_gig['venue'] = array_shift($cover_gig);
        $current_month = '';

        foreach ($cover_gig as $gig) {

          $this_row = [];

          if (strpos($gig, ' ') === false && self::check_month($gig)) {
            $current_month = trim($gig);
          } else {
            if (preg_match('/^([a-z]*)\s*([0-9]+)(th|st|rd)?\s*\-?\s*(.*)$/i', trim($gig), $gig_matches)) {

              $day = $gig_matches[2];

              if (!empty($gig_matches[1])) {
                $is_day = self::check_day($gig_matches[1]);
                if ($is_day) {
                  unset($gig_matches[1]);
                }
              }

              $month = (!empty($gig_matches[1]) ? $gig_matches[1] : $current_month);

              $date = date('jS F', strtotime($day . ' ' . $month));

              $date = self::date_passed($date);

              $this_row['date'] = $date;
              $this_row['band'] = (!empty($gig_matches[4]) ? $gig_matches[4] : '');
              $this_row['band'] = self::validate_bands([$this_row['band']]);

              $this_gig['details'][] = $this_row;
            } else {
              $this_gig['title'] = $gig;
            }
          }
        }

        $band_model = Model::factory('bands');

        foreach ($this_gig['details'] as $temp_gig) {

          $gigs_for_artist = ['date'  => $temp_gig['date'],
                              'venue' => $this_gig['venue'],
                              'bands' => $temp_gig['band']];
          $band_model->add_band_gigs($gigs_for_artist);
        }

        $all_gigs[] = $this_gig;
      }
    }
    return $all_gigs;
  }

  static function check_month($this_month)
  {
    $months = range(1, 12);
    $check_months = [];

    foreach ($months as $month) {
      $date = DateTime::createFromFormat('!m', $month);
      $check_months[] = strtolower($date->format('F'));
      $check_months[] = strtolower($date->format('M'));
    }

    return in_array(strtolower(trim($this_month)), $check_months) ? true : false;
  }

  static function check_day($this_day)
  {
    $days = range(1, 7);
    $check_days = [];

    foreach ($days as $day) {
      $date = DateTime::createFromFormat('!d', $day);
      $check_days[] = strtolower($date->format('D'));
      $check_days[] = strtolower($date->format('l'));
    }

    return in_array(strtolower(trim($this_day)), $check_days) ? true : false;
  }
}