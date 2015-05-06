<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Login extends Model_Insangel
{

  /**
   * @param string $username
   * @param string $password
   * @return mixed
   * @author Andrew Haswell
   */

  public function get_user($username = '', $password = '')
  {
    $sql = 'SELECT id
         FROM users
        WHERE username = "' . $username . '"
          AND password = PASSWORD("' . $password . '")';

    $query = DB::query(Database::SELECT, $sql);

    return $query->execute()->as_array();
  }
}