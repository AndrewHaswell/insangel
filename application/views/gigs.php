<h1>Gig Guide</h1>

<?php
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
        $this_lineup[] = (strtolower($band) != 'tbc') ? '<a href="' . URL::site('/bands/' . $id) . '">' . $band . '</a>'
          : 'TBC';
      }

      echo implode(' &bull; ', $this_lineup);
    }

    echo '</div>';

    echo '<div class="gig_details">' . $gig['price'] . ' / ' . (!empty($gig['time']) ? $gig['time'] . ' / ':'') . (!empty($gig['contact'])?$gig['contact']:'') . '</div>';

    echo '</div>' . "\n\r";
  }
}
?>