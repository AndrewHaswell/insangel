<?php
echo '<h2>Example Gig Guide</h2>';
if (!empty($gig_guide) && is_array($gig_guide)) {
  foreach ($gig_guide as $gig) {

    echo '<div class="gig">' . "\n";

    echo '<div class="gig_title">';
    if (!empty($gig['title'])) {
      echo $gig['title'] . ' :: ';
    }
    echo $gig['date'] . '</div>';

    if (!empty($gig['subtitle'])) {
      echo '<div class="gig_subtitle">' . $gig['subtitle'] . '</div>';
    }

    echo '<div class="gig_venue">' . $gig['venue'] . '</div>';

    echo '<div class="gig_bands">';

    if (!empty($gig['bands']) && is_array($gig['bands'])) {
      $this_lineup = [];
      foreach ($gig['bands'] as $id => $band) {
        $this_lineup[] = (strtolower($band) != 'tbc') ? '<a href="#">' . $band . '</a>'
          : 'TBC';
      }

      echo implode(' &bull; ', $this_lineup);
    }

    echo '</div>';

    echo '<div class="gig_details">' . $gig['price'] . ' / ' . (!empty($gig['time']) ? $gig['time'] . ' / '
        : '') . (!empty($gig['contact']) ? $gig['contact'] : '') . '</div>';

    echo '</div>' . "\n\r";
  }
}
if (!empty($cover_gig_guide) && is_array($cover_gig_guide)) {
  echo '<h2>Example Cover Gig Guide</h2>';
  foreach ($cover_gig_guide as $cover_gigs) {
    echo '<div class="gig">';
    echo '<div class="gig_title">' . $cover_gigs['venue'] . '</div>';
    if (!empty($cover_gigs['title'])) {
      echo '<div class="gig_subtitle">' . $cover_gigs['title'] . '</div>';
    }

    foreach ($cover_gigs['details'] as $cover_gig) {

      $band_name = current($cover_gig['band']);
      $band_id = key($cover_gig['band']);

      $band = (!empty($band_name)) ? '<a href="#">' . $band_name . '</a>' : 'TBC';

      echo '<div class="gig_details">' . $cover_gig['date'] . ' :: ' . $band . '</div>';
    }
    echo '</div>';
  }
}
?>