<h1>Edit Artist - <?= $artist['band_name'] ?></h1>
<form action="<?php echo URL::base() ?>cms/save_artist" method="post">
  <p>Artist Name: <input type="text" id="band_name" name="band_name" value="<?= $artist['band_name'] ?>"/></p>
  <textarea name="band_details" id="band_details"><?= $artist['band_details'] ?></textarea>
  <input type="submit" value="Save Details"/>
  <input type="hidden" name="band_id" value="<?= $band_id ?>"/>
</form>