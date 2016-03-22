<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 01:25
 */
require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Utils\Config;
require __DIR__.'./config.php';

$paths = array("src/Application/Models/Entity");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'dbname' => Config::get('database/db'),
    'user' => Config::get('database/username'),
    'password' => Config::get('database/password'),
    'host' => Config::get('database/host'),
    'driver' => Config::get('database/driver'),
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);