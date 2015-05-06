<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Bands extends Controller_Insangel
{

  public function before()
  {
    parent::before();
  }

  public function action_index()
  {

    $band_id = $this->request->param('id');
    $band_model = Model::factory('bands');

    $band = $band_model->get_band_by_id($band_id);
    $gigs = $band_model->get_gigs_by_id($band_id);

    if (!empty($band[0])) {

      $band = current($band);

      $this->template->title = $band['band_name'];
      $this->template->styles += ['public/css/bands.css' => 'screen'];
      $this->template->message = View::factory('bands');

      $this->template->message->auth_user = $this->auth_user;
      $this->template->message->band_name = $band['band_name'];
      $this->template->message->band_details = $band['band_details'];
      $this->template->message->band_id = $band_id;
      $this->template->message->gigs = $gigs;
    } else {
      $this->redirect('/artists/');
    }
  }

  public function action_all_artists()
  {
    $band_model = Model::factory('bands');
    $all_bands = $band_model->get_all_band_names();

    $full_band_list = [];

    if (!empty($all_bands) && is_array($all_bands)) {
      foreach ($all_bands as $band) {
        $band_name_order = trim(preg_replace('/^the/i', '', $band['band_name']));
        $full_band_list[strtoupper(substr($band_name_order, 0, 1))][$band['id']] = $band['band_name'];
      }
    }

    $this->template->title = 'Artists';
    $this->template->message = View::factory('artists');
    $this->template->message->band_list = $full_band_list;
  }

  public function after()
  {
    parent::after();
  }
}