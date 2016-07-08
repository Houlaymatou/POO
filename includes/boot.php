<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', '/var/www/html/poo2/gallery_start');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'includes');
defined('ASSETS_PATH') ? null : define('ASSETS_PATH', '/poo2/gallery_start/public/assets');

require_once(INCLUDES_PATH.DS.'functions.php');
require_once(INCLUDES_PATH.DS.'classes'.DS.'Database.php');
require_once(INCLUDES_PATH.DS.'classes'.DS.'DBRecord.php');
require_once(INCLUDES_PATH.DS.'classes'.DS.'User.php');
require_once(INCLUDES_PATH.DS.'classes'.DS.'Photo.php');


?>
