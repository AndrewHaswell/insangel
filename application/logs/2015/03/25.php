<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-25 10:58:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function array_split() ~ APPPATH\classes\Controller\gigs.php [ 38 ] in file:line
2015-03-25 10:58:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 10:58:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function array_split() ~ APPPATH\classes\Controller\gigs.php [ 38 ] in file:line
2015-03-25 10:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 11:05:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function str_to_time() ~ APPPATH\classes\Controller\gigs.php [ 15 ] in file:line
2015-03-25 11:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 11:18:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Debugs' not found ~ APPPATH\classes\Controller\gigs.php [ 63 ] in file:line
2015-03-25 11:18:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 11:20:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\gigs.php [ 210 ] in file:line
2015-03-25 11:20:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 11:32:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this_gig' (T_VARIABLE) ~ APPPATH\classes\Controller\gigs.php [ 96 ] in file:line
2015-03-25 11:32:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 12:12:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\insangel.php [ 19 ] in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:12:56 --- DEBUG: #0 C:\wamp\www\IOP\application\views\insangel.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 19, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:19:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\insangel.php [ 19 ] in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:19:46 --- DEBUG: #0 C:\wamp\www\IOP\application\views\insangel.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 19, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:24:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::view_render() ~ APPPATH\classes\Controller\insangel.php [ 28 ] in file:line
2015-03-25 12:24:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 12:25:27 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\insangel.php [ 12 ] in C:\wamp\www\IOP\application\classes\Controller\insangel.php:12
2015-03-25 12:25:27 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\insangel.php(12): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\IOP...', 12, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(69): Controller_Insangel->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insangel))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\insangel.php:12
2015-03-25 12:28:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\insangel.php [ 3 ] in C:\wamp\www\IOP\application\views\insangel.php:3
2015-03-25 12:28:56 --- DEBUG: #0 C:\wamp\www\IOP\application\views\insangel.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 3, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\IOP\application\views\insangel.php(19): Kohana_View->__toString()
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#7 C:\wamp\www\IOP\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\IOP\application\views\insangel.php:3
2015-03-25 12:29:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\insangel.php [ 3 ] in C:\wamp\www\IOP\application\views\insangel.php:3
2015-03-25 12:29:24 --- DEBUG: #0 C:\wamp\www\IOP\application\views\insangel.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 3, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\IOP\application\views\insangel.php(19): Kohana_View->__toString()
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#7 C:\wamp\www\IOP\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\IOP\application\views\insangel.php:3
2015-03-25 12:33:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\insangel.php [ 19 ] in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:33:13 --- DEBUG: #0 C:\wamp\www\IOP\application\views\insangel.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 19, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\application\classes\Controller\insangel.php(22): Kohana_View->render()
#4 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Insangel->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:33:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\insangel.php [ 19 ] in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:33:35 --- DEBUG: #0 C:\wamp\www\IOP\application\views\insangel.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 19, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\application\classes\Controller\insangel.php(22): Kohana_View->render()
#4 C:\wamp\www\IOP\application\classes\Controller\gigs.php(13): Controller_Insangel->after()
#5 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\IOP\application\views\insangel.php:19
2015-03-25 12:34:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\insangel.php [ 13 ] in C:\wamp\www\IOP\application\classes\Controller\insangel.php:13
2015-03-25 12:34:25 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\insangel.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\IOP...', 13, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\gigs.php(10): Controller_Insangel->before()
#2 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(69): Controller_Gigs->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\IOP\application\classes\Controller\insangel.php:13
2015-03-25 12:34:49 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\insangel.php [ 16 ] in C:\wamp\www\IOP\application\classes\Controller\insangel.php:16
2015-03-25 12:34:49 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\insangel.php(16): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\IOP...', 16, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\gigs.php(10): Controller_Insangel->before()
#2 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(69): Controller_Gigs->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\IOP\application\classes\Controller\insangel.php:16
2015-03-25 12:47:28 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\Kohana\View.php [ 179 ] in C:\wamp\www\IOP\application\classes\Controller\gigs.php:23
2015-03-25 12:47:28 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\gigs.php(23): Kohana_View->__get('styles')
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\gigs.php:23
2015-03-25 12:47:41 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\Kohana\View.php [ 179 ] in C:\wamp\www\IOP\application\classes\Controller\gigs.php:12
2015-03-25 12:47:41 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\gigs.php(12): Kohana_View->__get('styles')
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(69): Controller_Gigs->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\gigs.php:12
2015-03-25 12:47:48 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\Kohana\View.php [ 179 ] in C:\wamp\www\IOP\application\classes\Controller\gigs.php:27
2015-03-25 12:47:48 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\gigs.php(27): Kohana_View->__get('styles')
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Gigs->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\gigs.php:27
2015-03-25 12:49:07 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\wamp\www\IOP\system\classes\Kohana\HTML.php:71
2015-03-25 12:49:07 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\IOP...', 71, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(224): Kohana_HTML::attributes(Array)
#3 C:\wamp\www\IOP\application\views\insangel.php(7): Kohana_HTML::style(0, Array, true)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#6 C:\wamp\www\IOP\application\classes\Controller\insangel.php(28): Kohana_View->render()
#7 C:\wamp\www\IOP\application\classes\Controller\gigs.php(16): Controller_Insangel->after()
#8 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\IOP\system\classes\Kohana\HTML.php:71
2015-03-25 12:49:11 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\wamp\www\IOP\system\classes\Kohana\HTML.php:71
2015-03-25 12:49:11 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\IOP...', 71, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(224): Kohana_HTML::attributes(Array)
#3 C:\wamp\www\IOP\application\views\insangel.php(7): Kohana_HTML::style(0, Array, true)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#6 C:\wamp\www\IOP\application\classes\Controller\insangel.php(28): Kohana_View->render()
#7 C:\wamp\www\IOP\application\classes\Controller\gigs.php(16): Controller_Insangel->after()
#8 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\IOP\system\classes\Kohana\HTML.php:71
2015-03-25 12:49:44 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\wamp\www\IOP\system\classes\Kohana\HTML.php:71
2015-03-25 12:49:44 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\IOP...', 71, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\wamp\www\IOP\system\classes\Kohana\HTML.php(224): Kohana_HTML::attributes(Array)
#3 C:\wamp\www\IOP\application\views\insangel.php(7): Kohana_HTML::style(0, Array, true)
#4 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#6 C:\wamp\www\IOP\application\classes\Controller\insangel.php(28): Kohana_View->render()
#7 C:\wamp\www\IOP\application\classes\Controller\gigs.php(16): Controller_Insangel->after()
#8 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\IOP\system\classes\Kohana\HTML.php:71
2015-03-25 13:53:17 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant docroot - assumed 'docroot' ~ APPPATH\views\gigs.php [ 23 ] in C:\wamp\www\IOP\application\views\gigs.php:23
2015-03-25 13:53:17 --- DEBUG: #0 C:\wamp\www\IOP\application\views\gigs.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\IOP...', 23, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\IOP\application\views\insangel.php(15): Kohana_View->__toString()
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#7 C:\wamp\www\IOP\application\classes\Controller\insangel.php(28): Kohana_View->render()
#8 C:\wamp\www\IOP\application\classes\Controller\gigs.php(16): Controller_Insangel->after()
#9 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\IOP\application\views\gigs.php:23
2015-03-25 13:53:43 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH\views\gigs.php [ 23 ] in file:line
2015-03-25 13:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 16:58:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: details ~ APPPATH\views\gigs.php [ 43 ] in C:\wamp\www\IOP\application\views\gigs.php:43
2015-03-25 16:58:51 --- DEBUG: #0 C:\wamp\www\IOP\application\views\gigs.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\IOP...', 43, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\IOP\application\views\insangel.php(20): Kohana_View->__toString()
#5 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#6 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#7 C:\wamp\www\IOP\application\classes\Controller\insangel.php(25): Kohana_View->render()
#8 C:\wamp\www\IOP\application\classes\Controller\gigs.php(16): Controller_Insangel->after()
#9 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#12 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\IOP\application\views\gigs.php:43
2015-03-25 17:11:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\cms.php [ 43 ] in file:line
2015-03-25 17:11:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-25 17:24:11 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Cms::action_edit_cms(), called in C:\wamp\www\IOP\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\cms.php [ 16 ] in C:\wamp\www\IOP\application\classes\Controller\cms.php:16
2015-03-25 17:24:11 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\cms.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\IOP...', 16, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\cms.php:16
2015-03-25 17:26:50 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Cms::action_edit_cms(), called in C:\wamp\www\IOP\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\cms.php [ 16 ] in C:\wamp\www\IOP\application\classes\Controller\cms.php:16
2015-03-25 17:26:50 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\cms.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\IOP...', 16, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\cms.php:16
2015-03-25 17:26:58 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$params ~ APPPATH\classes\Controller\cms.php [ 19 ] in C:\wamp\www\IOP\application\classes\Controller\cms.php:19
2015-03-25 17:26:58 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\cms.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\IOP...', 19, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\cms.php:19
2015-03-25 17:29:36 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH\classes\Controller\cms.php [ 19 ] in C:\wamp\www\IOP\application\classes\Controller\cms.php:19
2015-03-25 17:29:36 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\cms.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\IOP...', 19, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\cms.php:19
2015-03-25 17:44:19 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH\classes\Controller\cms.php [ 20 ] in C:\wamp\www\IOP\application\classes\Controller\cms.php:20
2015-03-25 17:44:19 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\cms.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\IOP...', 20, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\cms.php:20
2015-03-25 17:49:59 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH\classes\Controller\cms.php [ 23 ] in file:line
2015-03-25 17:49:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\\wamp\\www\\IOP...', 23, Array)
#1 C:\wamp\www\IOP\application\classes\Controller\cms.php(23): in_array(Array, 'tehh.txt')
#2 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-25 17:50:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\cms.php [ 33 ] in C:\wamp\www\IOP\application\classes\Controller\cms.php:33
2015-03-25 17:50:42 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\cms.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 33, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\cms.php:33
2015-03-25 17:51:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\cms.php [ 34 ] in C:\wamp\www\IOP\application\classes\Controller\cms.php:34
2015-03-25 17:51:28 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\cms.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\IOP...', 34, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Cms->action_edit_cms()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\cms.php:34
2015-03-25 18:12:33 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  Insangel
  
  
  
  
  
  tinymce.init({selector:'textarea'});




  Content

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:12:33 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\View.php(145): Kohana_View->set_filename(Object(View))
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 C:\wamp\www\IOP\application\classes\Controller\insangel.php(16): Kohana_View::factory(Object(View))
#3 C:\wamp\www\IOP\application\classes\Controller\pages.php(23): Controller_Insangel->before()
#4 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Pages->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:13:56 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  Insangel
  
  
  
  
  
  tinymce.init({selector:'textarea'});




  Content

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:13:56 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\View.php(145): Kohana_View->set_filename(Object(View))
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 C:\wamp\www\IOP\application\classes\Controller\insangel.php(16): Kohana_View::factory(Object(View))
#3 C:\wamp\www\IOP\application\classes\Controller\pages.php(21): Controller_Insangel->before()
#4 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Pages->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:47:59 --- CRITICAL: View_Exception [ 0 ]: The requested view pages could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:47:59 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\View.php(145): Kohana_View->set_filename('pages')
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages', NULL)
#2 C:\wamp\www\IOP\application\classes\Controller\pages.php(19): Kohana_View::factory('pages')
#3 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Pages->action_cms()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:48:12 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  test
  
  
  
  
  
  tinymce.init({selector:'textarea'});




  

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:48:12 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\View.php(145): Kohana_View->set_filename(Object(View))
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 C:\wamp\www\IOP\application\classes\Controller\insangel.php(16): Kohana_View::factory(Object(View))
#3 C:\wamp\www\IOP\application\classes\Controller\pages.php(30): Controller_Insangel->before()
#4 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Pages->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:49:00 --- CRITICAL: View_Exception [ 0 ]: The requested view 

  Gigs
  
  
  
  
  
  tinymce.init({selector:'textarea'});




  

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 18:49:00 --- DEBUG: #0 C:\wamp\www\IOP\system\classes\Kohana\View.php(145): Kohana_View->set_filename(Object(View))
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 C:\wamp\www\IOP\application\classes\Controller\insangel.php(16): Kohana_View::factory(Object(View))
#3 C:\wamp\www\IOP\application\classes\Controller\pages.php(30): Controller_Insangel->before()
#4 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Pages->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\IOP\system\classes\Kohana\View.php:145
2015-03-25 19:11:19 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\insangel.php [ 23 ] in C:\wamp\www\IOP\application\views\insangel.php:23
2015-03-25 19:11:19 --- DEBUG: #0 C:\wamp\www\IOP\application\views\insangel.php(23): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\IOP...', 23, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\IOP...')
#2 C:\wamp\www\IOP\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\IOP...', Array)
#3 C:\wamp\www\IOP\application\classes\Controller\insangel.php(49): Kohana_View->render()
#4 C:\wamp\www\IOP\application\classes\Controller\gigs.php(16): Controller_Insangel->after()
#5 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(87): Controller_Gigs->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gigs))
#8 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\IOP\application\views\insangel.php:23