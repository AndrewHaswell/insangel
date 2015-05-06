<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Pages extends Controller_Insangel
{

  public function before()
  {
    parent::before();
  }

  public function action_cms()
  {

    $page = $this->request->param('id');

    if (file_exists($this->cms_path . $page . '.txt')) {
      $contents = file_get_contents($this->cms_path . $page . '.txt');

      $this->template->title = $page;
      $this->template->message = View::factory('page');
      $this->template->message->contents = $contents;

    } else {
      echo Debug::vars($page);
      exit;
    }
  }

  public function after()
  {
    parent::after();
  }
}