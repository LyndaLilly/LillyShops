<?php

session_start();

define('APP_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);


require_once('Core' . DS. 'connect.php');



require_once('Core' . DS . 'router.php');