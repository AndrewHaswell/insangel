<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-18 14:24:16 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/insangel/public_html/system/classes/Kohana/Cookie.php:67
2015-04-18 14:24:16 --- DEBUG: #0 /home/insangel/public_html/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('BIGipServerpl_g...', NULL)
#1 /home/insangel/public_html/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('BIGipServerpl_g...')
#2 /home/insangel/public_html/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/insangel/public_html/system/classes/Kohana/Cookie.php:67