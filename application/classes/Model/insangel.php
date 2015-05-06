<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Insangel extends Model
{
  public $cms_path = 'public/cms/';
  public $db = '';

  public function before()
  {
    $this->db = Database::instance();
  }
}