<h1>CMS</h1>

<form action="<?php echo URL::base() ?>cms/save" method="post">

  Filename: <input type="text" name="filename" id="filename" value="<?php echo $filename; ?>"/>
  Category: <input type="text" name="category" id="category" value="<?php echo $category; ?>"/>

  <textarea name="contents"><?php echo $contents ?></textarea>

  <input type="submit" value="submit"/>

</form>

<script>

</script>