<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Cms extends Controller_Insangel
{

  /**
   * @author Andrew Haswell
   */

  public function before()
  {
    parent::before();
    if (!$this->auth_user) {
      $this->redirect('/login/');
    }
  }

  /**
   * @author Andrew Haswell
   */

  public function action_edit_cms()
  {
    $page = $this->request->param('id');
    $contents = '';

    if (!empty($page)) {
      $cms = Model::factory('cms');
      $pages = $cms->get_cms_pages();

      if (in_array($page . '.txt', $pages)) {
        $filename = $this->cms_path . $page . '.txt';

        if (file_exists($filename)) {
          $contents = file_get_contents($filename);
        }
      }
    }

    $page = explode('--', $page);
    $filename = (!empty($page[0])) ? trim($page[0]) : '';
    $category = (!empty($page[1])) ? trim($page[1]) : '';

    $this->template->styles += ['public/css/cms.css' => 'screen'];
    $this->template->title = 'Content Management System';
    $this->template->message = View::factory('cms');

    $this->template->message->contents = $contents;
    $this->template->message->filename = $filename;
    $this->template->message->category = $category;
  }

  /**
   * @author Andrew Haswell
   */

  public function action_index()
  {
    $cms_pages = Model::factory('cms')->get_cms_pages();
    $this->template->styles += ['public/css/cms_pages.css' => 'screen'];
    $this->template->message = View::factory('cms_pages');
    $this->template->title = 'Content Management';
    $this->template->message->cms_pages = $cms_pages;
  }

  /**
   * @author Andrew Haswell
   */

  public function action_edit_artist()
  {
    $id = $this->request->param('id');

    $band_model = Model::factory('bands');
    $artist = $band_model->get_band_by_id($id);

    if (!empty($artist)) {
      $this->template->styles += ['public/css/cms.css' => 'screen'];
      $this->template->message = View::factory('edit_artist');
      $this->template->title = 'Edit Artist';
      $this->template->message->artist = current($artist);
      $this->template->message->band_id = $id;
    }
  }

  /**
   * @author Andrew Haswell
   */

  public function action_delete_artist()
  {
    $id = $this->request->param('id');
    Model::factory('bands')->delete_band($id);
    $this->redirect('/artists/');
  }

  /**
   * @author Andrew Haswell
   */

  public function action_test_gigs()
  {
    $gig_guide = guide::parse_gig_guide('public/test_gigList.txt');

    $this->template->title = 'Gigs';
    $this->template->styles += ['public/css/gigs.css' => 'screen'];

    $this->template->message = View::factory('gig_parse_test');
    $this->template->message->gig_guide = $gig_guide['gigs'];
    $this->template->message->cover_gig_guide = $gig_guide['cover_gigs'];


  }

  /**
   * @author Andrew Haswell
   */

  public function action_save()
  {
    if (!empty($_POST['contents']) && !empty($_POST['filename'])) {
      $filename = pathinfo($_POST['filename']);
      if (!empty($_POST['category'])) {
        $filename['filename'] .= '--' . $_POST['category'];
      }
      $filename = $this->cms_path . strtolower(str_replace(' ', '_', $filename['filename'])) . '.txt';
      if (file_exists($filename)) {
        rename($filename, $filename . '.bak.' . time());
      }
      file_put_contents($filename, $_POST['contents']);
    }
    $this->redirect('/cms/');
  }

  /**
   * @author Andrew Haswell
   */

  public function action_delete()
  {
    $page = $this->request->param('id');

    if (!empty($page)) {
      $filename = $this->cms_path . str_replace(' ', '_', $page) . '.txt';
      rename($filename, $filename . '.bak.' . time());
    }
    $this->redirect('/cms/');
  }

  /**
   * @author Andrew Haswell
   */

  public function action_save_artist()
  {
    if (!empty($_POST)) {
      Model::factory('bands')->edit_artist($_POST);
    }
    $this->redirect('/artists/');
  }

  /**
   * @author Andrew Haswell
   */

  public function after()
  {
    parent::after();
  }
}