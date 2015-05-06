<h1>All Artists</h1>

<?php

if (!empty($band_list) && is_array($band_list)) {

  $row_count = ceil(count($band_list) / 4);
  $counter = 1;
  $col_counter = 1;

  ?>
  <table width="100%">
    <tr valign="top">
      <td style="padding: 0 10px" colspan="25%">
        <?php
        foreach ($band_list as $initial => $bands) {

          echo '<h2>' . $initial . '</h2>';

          echo '<ul>';
          foreach ($bands as $id => $band) {
            echo '<li><a href="' . URL::site('/bands/' . $id) . '">' . $band . '</a></li>';
          }
          echo '</ul>';
          if ($counter >= $row_count && $col_counter < 4) {
            echo '</td>' . "\n\r" . '<td style="padding: 0 10px" colspan="25%">';
            $counter = 1;
            $col_counter++;
          }
          $counter++;
        }

        ?>
      </td>
    </tr>
  </table>

<?php
}

?>