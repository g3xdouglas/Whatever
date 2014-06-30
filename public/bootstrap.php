<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('America/Sao_Paulo');
define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(__DIR__ . DS . '..'));
define('TEMPLATE', APP_ROOT.DS.'templates');

$composer_autoload = APP_ROOT . DS . 'vendor' . DS . 'autoload.php';
include($composer_autoload);
