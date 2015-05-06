<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-23 11:14:28 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\hello.php [ 9 ] in C:\wamp\www\IOP\application\classes\Controller\hello.php:9
2015-03-23 11:14:28 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\hello.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\IOP...', 9, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Hello->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\hello.php:9
2015-03-23 11:15:12 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\hello.php [ 9 ] in C:\wamp\www\IOP\application\classes\Controller\hello.php:9
2015-03-23 11:15:12 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\hello.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\IOP...', 9, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Hello->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\hello.php:9
2015-03-23 11:15:28 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\hello.php [ 9 ] in C:\wamp\www\IOP\application\classes\Controller\hello.php:9
2015-03-23 11:15:28 --- DEBUG: #0 C:\wamp\www\IOP\application\classes\Controller\hello.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\IOP...', 9, Array)
#1 C:\wamp\www\IOP\system\classes\Kohana\Controller.php(84): Controller_Hello->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\IOP\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#4 C:\wamp\www\IOP\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\IOP\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\IOP\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\IOP\application\classes\Controller\hello.php:9
2015-03-23 11:59:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\views\insangel.php [ 5 ] in file:line
2015-03-23 11:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line