<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Insangel extends Controller
{

  public $template = 'insangel';
  public $auto_render = true;
  public $cms_path = 'public/cms/';
  public $auth_user;

  public function before()
  {
    parent::before();

    $user = Session::instance()->get('isauser');
    $this->auth_user = (!is_null($user)) ? true : false;

    $maintenance_mode = true;

    if ($maintenance_mode && $_SERVER['REMOTE_ADDR'] != '86.144.122.118') {
      $this->redirect('/home.html');
    }

    if ($this->auto_render === true) {

      $this->template = View::factory($this->template);
      $this->template->title = 'Insangel';
      $this->template->navigation = $this->navigation();

      $this->template->message = 'Content';
      $this->template->styles = ['public/css/style.css' => 'screen'];
    }
  }

  /**
   * @author Andrew Haswell
   */

  public function navigation()
  {

    $navigation = ['Gig Guide'    => URL::site('gigs'),
                   'Artists' => URL::site('artists')];

    if ($this->auth_user) {
      $navigation['CMS'] = URL::site('Cms');
    }

    $cms = Model::factory('Cms');

    $pages = $this->parse_cms($cms->get_cms_pages());
    if (!empty($pages)) {
      $navigation += $pages;
    }

    return $navigation;
  }

  public function parse_cms($pages)
  {
    $files = [];
    if (!empty($pages) && is_array($pages)) {
      foreach ($pages as $page) {
        $fullpage = strtolower($page);
        $page = explode('--', $page);
        if (empty($page[1])) {
          // We're top level, just use the file
          $name = ucwords(strtolower(str_replace('_', ' ', basename($page[0], '.txt'))));
          $url = URL::base() . 'pages/' . basename($fullpage, '.txt');
          $files[$name] = $url;
        } else {
          // We're sub level
          $directory = ucwords(strtolower(str_replace('_', ' ', basename($page[1], '.txt'))));
          $name = ucwords(strtolower(str_replace('_', ' ', basename($page[0], '.txt'))));
          $url = URL::base() . 'pages/' . basename($fullpage, '.txt');
          $files[$directory][$name] = $url;
        }
      }
      return $files;
    }
    return false;
  }

  public function after()
  {
    if ($this->auto_render === true) {
      $this->response->body($this->template->render());
    }

    parent::after();
  }
}
