<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Bands extends Model_Insangel
{

  /**
   * @param string $band
   * @return mixed
   * @author Andrew Haswell
   */

  public function check_band_exists($band = '')
  {
    $query = DB::select('id')->from('bands')->where('band_name', '=', $band);
    return $query->execute()->get('id', false);
  }

  /**
   * @return mixed
   * @author Andrew Haswell
   */

  public function get_all_band_names()
  {
    return DB::select('band_name', 'id')->from('bands')->where('active', '=', 'Y')->where('deleted', '=', 'N')->where('band_name', '!=', 'tbc')->order_by('band_name', 'ASC')->execute()->as_array();
  }

  /**
   * @param int $id
   * @return mixed
   * @author Andrew Haswell
   */

  public function get_band_by_id($id = 0)
  {

    $query = DB::query(Database::SELECT, 'SELECT b.band_name,
              bd.band_details
         FROM bands b
    LEFT JOIN band_details AS bd
           ON bd.band_id = b.id
        WHERE b.id = ' . $id . '
          AND active = "Y"
          AND deleted = "N"');

    return $query->execute()->as_array();
  }
  public function get_gigs_by_id($id = 0)
  {

    $query = DB::query(Database::SELECT, 'SELECT *
         FROM bands_to_gigs
        WHERE band_id = ' . $id . '
          AND date > NOW()
          ORDER BY `date` ASC');

    return $query->execute()->as_array();
  }

  /**
   * @param string $band
   * @throws Kohana_Exception
   * @author Andrew Haswell
   */

  public function add_band($band = '')
  {
    $query = DB::insert('bands', array('band_name'))->values(array($band));
    list($insert_id) = $query->execute();
    return $insert_id;
  }

  /**
   * @param string $id
   * @author Andrew Haswell
   */

  public function delete_band($id = '')
  {
    DB::update('bands')->set(array('deleted' => 'Y',
                                   'active'  => 'N'))->where('id', '=', $id)->execute();
  }

  /**
   * @param $artist
   * @author Andrew Haswell
   */

  public function edit_artist($artist)
  {
    DB::update('bands')->set(array('band_name' => $artist['band_name']))->where('id', '=', $artist['band_id'])->execute();

    DB::query(Database::INSERT, "INSERT INTO band_details SET band_id = " . $artist['band_id'] . ", band_details = '" . addslashes($artist['band_details']) . "' ON DUPLICATE KEY UPDATE band_details = '" . addslashes($artist['band_details']) . "'")->execute();
  }

  public function add_band_gigs($gig)
  {

    if (!empty($gig['bands']) && is_array($gig['bands']) && !empty($gig['venue']) && !empty($gig['date'])) {

      foreach ($gig['bands'] as $band_id => $band) {

        $band_data[] = '(' . (int)$band_id . ', "' . date('Y-m-d', strtotime($gig['date'])) . '", "' . addslashes($gig['venue']) . '")';
      }

      $sql = "
          INSERT INTO bands_to_gigs (`band_id`, `date`, `venue`) VALUES " . implode(',', $band_data) . " ON DUPLICATE KEY UPDATE venue = VALUES(`venue`)";

      DB::query(Database::INSERT, $sql)->execute();
    }
  }
}