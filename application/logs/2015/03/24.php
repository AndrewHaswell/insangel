<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-24 14:43:20 --- CRITICAL: ErrorException [ 2 ]: substr() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\gigs.php [ 28 ] in file:line
2015-03-24 14:43:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'substr() expect...', 'C:\\wamp\\www\\IOP...', 28, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\gigs.php(28): substr(Array, 0, 10)
#2 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_parse_gig_guide()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#8 {main} in file:line