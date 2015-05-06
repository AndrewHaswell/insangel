<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-22 08:13:51 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND active = "Y"
          AND deleted = "N"' at line 7 [ SELECT b.band_name,
              bd.band_details
         FROM bands b
    LEFT JOIN band_details AS bd
           ON bd.band_id = b.id
        WHERE b.id = 
          AND active = "Y"
          AND deleted = "N" ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/insangel/public_html/modules/database/classes/Kohana/Database/Query.php:251
2015-04-22 08:13:51 --- DEBUG: #0 /home/insangel/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT b.band_n...', false, Array)
#1 /home/insangel/public_html/application/classes/Model/bands.php(46): Kohana_Database_Query->execute()
#2 /home/insangel/public_html/application/classes/Controller/Bands.php(17): Model_Bands->get_band_by_id(NULL)
#3 /home/insangel/public_html/system/classes/Kohana/Controller.php(84): Controller_Bands->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/insangel/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bands))
#6 /home/insangel/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/insangel/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/insangel/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/insangel/public_html/modules/database/classes/Kohana/Database/Query.php:251