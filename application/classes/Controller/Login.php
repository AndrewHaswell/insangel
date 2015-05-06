<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Login extends Controller_Insangel
{

  public function action_index()
  {
    $this->template->message = View::factory('login');
  }

  /**
   * @author Andrew Haswell
   */

  public function action_check_user()
  {
    $username = '';
    $password = '';

    extract($_POST);

    $user_id = Model::factory('login')->get_user($username, $password);
    $user = (!empty($user_id[0]['id'])) ? $user_id[0]['id'] : 0;

    if (!empty($user)) {
      Session::instance()->set('isauser', $user);
      $this->redirect('/gigs/');
    }

    $this->redirect('/login/');
  }
}