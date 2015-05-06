<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Cms extends Model_Insangel
{

  public function get_cms_pages()
  {
    $pages = glob($this->cms_path . '*.txt');
    return array_map(function ($value) { return basename($value); }, $pages);
  }
}