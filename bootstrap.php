<?php
/**
 * Created by PhpStorm.
 * User: jeanchagas
 * Date: 12/17/18
 * Time: 11:47 AM
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
require_once "vendor/autoload.php";
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Api/Entity"), $isDevMode);
$conn = array(
    'dbname' => '',
    'user' => '',
    'password' => '',
    'host' => '',
    'driver' => ''
);
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);