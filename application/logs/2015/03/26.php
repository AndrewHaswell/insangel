<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-26 09:49:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2015-03-26 09:49:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 09:56:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2015-03-26 09:56:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:06:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH\database\classes\Database\MySQLi.php [ 3 ] in file:line
2015-03-26 10:06:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:07:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH\database\classes\Database\MySQLi.php [ 3 ] in file:line
2015-03-26 10:07:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:07:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2015-03-26 10:07:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:08:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH\database\classes\Database\MySQLi.php [ 3 ] in file:line
2015-03-26 10:08:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:09:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH\database\classes\Database\MySQLi.php [ 3 ] in file:line
2015-03-26 10:09:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:11:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH\database\classes\Database\MySQLi.php [ 3 ] in file:line
2015-03-26 10:11:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:12:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQL' not found ~ MODPATH\database\classes\Database\MySQL.php [ 3 ] in file:line
2015-03-26 10:12:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:13:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH\database\classes\Database\MySQLi.php [ 3 ] in file:line
2015-03-26 10:13:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:33:41 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SOUNDEX 'Chris Binding'' at line 1 [ SELECT * FROM `bands` WHERE `band_name` SOUNDEX 'Chris Binding' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 197 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 10:33:41 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(10): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(25): Model_Bands->check_band_exists('Chris Binding')
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 10:35:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\bands.php [ 13 ] in file:line
2015-03-26 10:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:37:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SOUNDEX(Chris Binding)' at line 2 [ SELECT *
FROM bands WHERE band_name SOUNDEX(Chris Binding) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 197 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 10:37:21 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *\nFROM b...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(18): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(25): Model_Bands->check_band_exists('Chris Binding')
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 10:40:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function quote() on a non-object ~ APPPATH\classes\Model\bands.php [ 12 ] in file:line
2015-03-26 10:40:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 10:40:41 --- CRITICAL: Database_Exception [ 1583 ]: Incorrect parameters in the call to native function 'SOUNDEX' [ SELECT * FROM bands WHERE SOUNDEX(band_name) = SOUNDEX(Chris Binding) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 197 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 10:40:41 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM b...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(17): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\gigs.php(25): Model_Bands->check_band_exists('Chris Binding')
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 11:20:19 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:20:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 11:21:09 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:21:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 11:21:46 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:21:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 11:22:20 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:22:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 11:23:52 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:23:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 11:24:26 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 11:24:47 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 11:25:30 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\gigs.php [ 21 ] in file:line
2015-03-26 11:25:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\application\views\gigs.php(21): implode(' &bull; ', NULL)
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#7 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#8 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#9 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#10 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-03-26 12:05:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: band_name ~ APPPATH\classes\Controller\bands.php [ 21 ] in C:\wamp\www\IOP\application\classes\Controller\bands.php:21
2015-03-26 12:05:29 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\bands.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Bands->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bands))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\bands.php:21
2015-03-26 12:05:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: band_name ~ APPPATH\classes\Controller\bands.php [ 21 ] in C:\wamp\www\IOP\application\classes\Controller\bands.php:21
2015-03-26 12:05:55 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\bands.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\IOP...', 21, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Bands->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bands))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\bands.php:21
2015-03-26 12:14:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::in_array() ~ APPPATH\classes\Model\bands.php [ 25 ] in file:line
2015-03-26 12:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 12:16:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '' in 'order clause' [ SELECT `band_name` FROM `bands` ORDER BY `` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 12:16:37 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `band_na...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(25): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\bands.php(34): Model_Bands->get_all_band_names()
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Bands->action_all_artists()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bands))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 12:22:17 --- CRITICAL: View_Exception [ 0 ]: The requested view artists could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-26 12:22:17 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\View.php(145): Kohana_View->set_filename('artists')
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(30): Kohana_View->__construct('artists', NULL)
#2 C:\wamp\www\IOP\application\classes\Controller\bands.php(44): Kohana_View::factory('artists')
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Bands->action_all_artists()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bands))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-26 12:29:37 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\artists.php [ 13 ] in C:\wamp\www\IOP\application\views\artists.php:13
2015-03-26 12:29:37 --- DEBUG: #0 C:\wamp\www\IOP\application\views\artists.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\wamp\\www\\IOP...', 13, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#7 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#8 C:\wamp\www\IOP\application\classes\Controller\bands.php(54): Controller_Insangel->after()
#9 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Bands->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bands))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\IOP\application\views\artists.php:13
2015-03-26 13:02:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_band' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-03-26 13:02:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 13:02:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_band' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-03-26 13:02:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 13:04:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: band_name ~ APPPATH\views\edit_artist.php [ 7 ] in C:\wamp\www\IOP\application\views\edit_artist.php:7
2015-03-26 13:04:33 --- DEBUG: #0 C:\wamp\www\IOP\application\views\edit_artist.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\IOP...', 7, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#7 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#8 C:\wamp\www\IOP\application\classes\Controller\cms.php(77): Controller_Insangel->after()
#9 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Cms->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\IOP\application\views\edit_artist.php:7
2015-03-26 13:23:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = dgdfg' at line 1 [ INSERT INTO band_details SET band_details = 'dgdfg' WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = dgdfg ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 13:23:42 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ban...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(66): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\cms.php(88): Model_Bands->edit_artist(Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_save_artist()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 13:26:21 --- CRITICAL: ErrorException [ 2 ]: mysqli_escape_string() expects exactly 2 parameters, 1 given ~ APPPATH\classes\Model\bands.php [ 66 ] in file:line
2015-03-26 13:26:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_escape_s...', 'C:\\wamp\\www\\IOP...', 66, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(66): mysqli_escape_string('72')
#2 C:\wamp\www\IOP\application\classes\Controller\cms.php(88): Model_Bands->edit_artist(Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_save_artist()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-03-26 13:28:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function escape() on a non-object ~ APPPATH\classes\Model\bands.php [ 66 ] in file:line
2015-03-26 13:28:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 13:30:40 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = ''dgdfg'' at line 1 [ INSERT INTO band_details SET band_details = 'dgdfg' WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = ''dgdfg' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 13:30:40 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ban...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(66): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\cms.php(88): Model_Bands->edit_artist(Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_save_artist()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 13:31:00 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = 'dgdfg'' at line 1 [ INSERT INTO band_details SET band_details = 'dgdfg' WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = 'dgdfg' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 13:31:00 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ban...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(66): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\cms.php(88): Model_Bands->edit_artist(Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_save_artist()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 13:33:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = 'dgdfg'' at line 1 [ INSERT INTO band_details SET band_id = 72, band_details = 'dgdfg' WHERE band_id = 72 ON DUPLICATE KEY UPDATE band_details = 'dgdfg' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 13:33:21 --- DEBUG: #0 C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ban...', false, Array)
#1 C:\wamp\www\IOP\application\classes\Model\bands.php(66): Kohana_Database_Query->execute()
#2 C:\wamp\www\IOP\application\classes\Controller\cms.php(88): Model_Bands->edit_artist(Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_save_artist()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 21:40:49 --- CRITICAL: ErrorException [ 2 ]: unlink(public/cms/AWOL.txt): No such file or directory ~ APPPATH\classes\Controller\cms.php [ 102 ] in file:line
2015-03-26 21:40:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(public/c...', 'C:\\wamp\\www\\IOP...', 102, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\cms.php(102): unlink('public/cms/AWOL...')
#2 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-26 21:41:26 --- CRITICAL: ErrorException [ 2 ]: unlink(public/cms/brass_monkeys.txt): No such file or directory ~ APPPATH\classes\Controller\cms.php [ 102 ] in file:line
2015-03-26 21:41:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(public/c...', 'C:\\wamp\\www\\IOP...', 102, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\cms.php(102): unlink('public/cms/bras...')
#2 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-26 21:52:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Bands::delete_band() ~ APPPATH\classes\Controller\cms.php [ 84 ] in file:line
2015-03-26 21:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 21:59:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function validate_bands() ~ APPPATH\classes\Controller\gigs.php [ 112 ] in file:line
2015-03-26 21:59:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 22:00:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function validate_bands() ~ APPPATH\classes\Controller\gigs.php [ 112 ] in file:line
2015-03-26 22:00:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 22:00:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function validate_bands() ~ APPPATH\classes\Controller\gigs.php [ 112 ] in file:line
2015-03-26 22:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-26 22:00:16 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\gigs.php [ 57 ] in C:\wamp\www\IOP\application\views\gigs.php:57
2015-03-26 22:00:16 --- DEBUG: #0 C:\wamp\www\IOP\application\views\gigs.php(57): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\IOP...', 57, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\IOP\application\views\insangel.php(57): Kohana_View->__toString()
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#7 C:\wamp\www\IOP\application\classes\Controller\insangel.php(51): Kohana_View->render()
#8 C:\wamp\www\IOP\application\classes\Controller\gigs.php(15): Controller_Insangel->after()
#9 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\IOP\application\views\gigs.php:57