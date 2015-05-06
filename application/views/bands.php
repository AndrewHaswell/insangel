<h1><?= $band_name ?></h1>
<?php
if (!empty($band_details)) {
  ?>
  <p><?= $band_details ?></p>
<?php
} else {
  ?>
  <p>We've got no details on this band/artist at the moment.</p>
<?php } ?>

<?php
if (!empty($gigs) && is_array($gigs)) {
  echo '<h2>Upcoming gigs</h2>';
  foreach ($gigs as $gig) {
    echo '<p><strong>' . date('D jS F Y', strtotime($gig['date'])) . '</strong> - ' . $gig['venue'] . '</p>';
  }
} else {
  echo '<p>We\'ve got no upcoming gigs for this band.</p>';
}

?>
<?php if ($auth_user) { ?>
  <a href="<?= URL::site('cms/edit_artist/' . $band_id) ?>">Edit</a>
  <a href="<?= URL::site('cms/delete_artist/' . $band_id) ?>">Delete</a>
<?php } ?>
<a href="#" onclick="history.back(); return false;">Back</a>