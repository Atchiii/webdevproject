<?php

    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASS', '');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'dbschedule');

    $dbc = @mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) 
    OR dies('Could not Connect to mysql: ' . mysql_connect_error());

?>