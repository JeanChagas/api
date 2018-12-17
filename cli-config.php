<?php
/**
 * Created by PhpStorm.
 * User: jeanchagas
 * Date: 12/17/18
 * Time: 11:46 AM
 */

// cli-config.php
require_once "bootstrap.php";
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);