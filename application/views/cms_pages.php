<h1>CMS Pages</h1>
<?php
echo '<div class="cms_link"><span class="cms_edit"><a href="' . URL::site('/cms/edit_cms/') . '">Add new page</a></span></div>';
if (!empty($cms_pages) && is_array($cms_pages)) {
  foreach ($cms_pages as $cms_page) {

    $edit_link = URL::site('/cms/edit_cms/' . basename($cms_page, '.txt'));
    $delete_link = URL::site('/cms/delete/' . basename($cms_page, '.txt'));

    $cms_page = explode('--', $cms_page);

    $directory = !empty($cms_page[1]) ? ucwords(str_replace('_', ' ', basename($cms_page[1], '.txt'))) : '';

    $cms_page = $cms_page[0];

    echo '<div class="cms_link"><span class="cms_title">' . ucwords(str_replace('_', ' ', basename($cms_page, '.txt'))) . (!empty($directory)
        ? ' (' . $directory . ')'
        : '') . '</span><span class="cms_edit"><a href="' . $edit_link . '">Edit</a></span><span class="cms_delete"><a href="' . $delete_link . '">Delete</a></span></div>';
  }
}
?>

<script>
  $('.cms_delete').click(
    function () {
      return confirm('Are you sure you want to delete this file?');
    }
  );
</script>