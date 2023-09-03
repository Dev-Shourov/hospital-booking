<?php

// path directories for project
// no brackets on -> dirname(__FILE__)/dirname(SOME_PATH)
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/Public');

// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
// define("WWW_ROOT", '');
// * Can dynamically find everything in URL up to "/public"
define("WWW_ROOT", '/hospital-booking/public');


require_once('functions.php');
require_once('database.php');
require_once('query.php'); 

$DB = db_connect();