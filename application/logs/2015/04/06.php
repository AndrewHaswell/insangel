<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-06 11:18:49 --- CRITICAL: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ APPPATH\classes\Controller\gigs.php [ 392 ] in file:line
2015-04-06 11:18:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\\wamp\\www\\IOP...', 392, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\gigs.php(392): date('l Js M Y', 'Tuesday 7th Apr...')
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(165): Controller_Gigs->date_passed('Tuesday 7th Apr...')
#3 C:\wamp\www\IOP\application\classes\Controller\gigs.php(62): Controller_Gigs->action_format_gig_guide(Array)
#4 C:\wamp\www\IOP\application\classes\Controller\gigs.php(22): Controller_Gigs->action_parse_gig_guide()
#5 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-04-06 11:19:00 --- CRITICAL: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ APPPATH\classes\Controller\gigs.php [ 392 ] in file:line
2015-04-06 11:19:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\\wamp\\www\\IOP...', 392, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\gigs.php(392): date('l Js M Y', 'Tuesday 7th Apr...')
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(165): Controller_Gigs->date_passed('Tuesday 7th Apr...')
#3 C:\wamp\www\IOP\application\classes\Controller\gigs.php(62): Controller_Gigs->action_format_gig_guide(Array)
#4 C:\wamp\www\IOP\application\classes\Controller\gigs.php(22): Controller_Gigs->action_parse_gig_guide()
#5 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-04-06 11:28:38 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\gigs.php [ 148 ] in C:\wamp\www\IOP\application\classes\Controller\gigs.php:148
2015-04-06 11:28:38 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\gigs.php(148): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\wamp\\www\\IOP...', 148, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\gigs.php(79): Controller_Gigs->action_format_cover_gigs(Array)
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(22): Controller_Gigs->action_parse_gig_guide()
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\application\classes\Controller\gigs.php:148
2015-04-06 19:42:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'value' in 'field list' [ 
          INSERT INTO bands_to_gigs (`band_id`, `date`, `venue`) VALUES (25, "2015-04-07", "The Three Tuns, Sherrif\'s Highway, Gateshead, NE9 5SD"),(133, "2015-04-07", "The Three Tuns, Sherrif\'s Highway, Gateshead, NE9 5SD"),(134, "2015-04-07", "The Three Tuns, Sherrif\'s Highway, Gateshead, NE9 5SD") ON DUPLICATE KEY UPDATE venue = VALUES(`value`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-04-06 19:42:37 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, '\n          INSE...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(98): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(250): Model_Bands->add_band_gigs(Array)
#3 C:\wamp\www\IOP\application\classes\Controller\gigs.php(62): Controller_Gigs->action_format_gig_guide(Array)
#4 C:\wamp\www\IOP\application\classes\Controller\gigs.php(22): Controller_Gigs->action_parse_gig_guide()
#5 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-04-06 21:55:18 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\gigs.php [ 7 ] in file:line
2015-04-06 21:55:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-06 21:57:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: PHP_AUTH_USER ~ APPPATH\classes\Controller\insangel.php [ 40 ] in C:\wamp\www\IOP\application\classes\Controller\insangel.php:40
2015-04-06 21:57:20 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\insangel.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\IOP...', 40, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\insangel.php(18): Controller_Insangel->navigation()
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(10): Controller_Insangel->before()
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(69): Controller_Gigs->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\application\classes\Controller\insangel.php:40