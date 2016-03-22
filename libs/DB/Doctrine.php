<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 01:08
 */

namespace DB;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Utils\Config;


class Doctrine
{
    public $em = null;

    public function __construct()
    {
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

        $this->em = EntityManager::create($dbParams, $config);

    }
}