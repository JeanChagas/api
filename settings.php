<?php
/**
 * Created by PhpStorm.
 * User: jeanchagas
 * Date: 12/17/18
 * Time: 10:11 AM
 */

if (!defined('ROOT_PATH')) {

    chdir(dirname(__FILE__));
    define('ROOT_PATH', dirname(__FILE__));
    define('DS', DIRECTORY_SEPARATOR);
    define('DOMAIN', 'http://'. $_SERVER['SERVER_NAME']);
}

require_once(ROOT_PATH . DS . 'vendor/autoload.php');