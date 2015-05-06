<h1>Cover Gigs and Venues</h1>

<?php

if (!empty($gig_guide) && is_array($gig_guide)) {

  foreach ($gig_guide as $cover_gigs) {
    echo '<div class="gig">';
    echo '<div class="gig_title">' . $cover_gigs['venue'] . '</div>';
    if (!empty($cover_gigs['title'])) {
      echo '<div class="gig_subtitle">' . $cover_gigs['title'] . '</div>';
    }

    foreach ($cover_gigs['details'] as $cover_gig) {

      $band_name = current($cover_gig['band']);
      $band_id = key($cover_gig['band']);

      $band = (!empty($band_name)) ? '<a href="' . URL::site('/bands/' . $band_id) . '">' . $band_name . '</a>' : 'TBC';

      echo '<div class="gig_details">' . $cover_gig['date'] . ' :: ' . $band . '</div>';
    }
    echo '</div>';
  }
}

?>