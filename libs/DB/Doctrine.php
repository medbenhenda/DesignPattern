<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 22/03/2016
 * Time: 01:08
 */

namespace Common\DB;

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\DBAL\Logging\EchoSQLLogger;
use Utils\Config;


class Doctrine
{
    public $em = null;

    public function __construct()
    {
        $doctrineClassLoader = new ClassLoader('Common\DB\Doctrine',  '/');
        $doctrineClassLoader->register();
        $entitiesClassLoader = new ClassLoader('Application\Models\Entity', '/');
        $entitiesClassLoader->register();
        $proxiesClassLoader = new ClassLoader('Application\Models\Entity\Proxy', '/');
        $proxiesClassLoader->register();

        // Set up caches
        $config = new Configuration;
        $cache = new ArrayCache;
        $config->setMetadataCacheImpl($cache);
        $driverImpl = $config->newDefaultAnnotationDriver(array('..\src\Application\Models\Entity'));
        $config->setMetadataDriverImpl($driverImpl);
        $config->setQueryCacheImpl($cache);

        $config->setQueryCacheImpl($cache);

        // Proxy configuration
        $config->setProxyDir('/proxies');
        $config->setProxyNamespace('Proxies');

        // Set up logger
        $logger = new EchoSQLLogger;
        //$config->setSQLLogger($logger);

        $config->setAutoGenerateProxyClasses( TRUE );

        // Database connection information
        $connectionOptions = array(
            'dbname' => Config::get('database/db'),
            'user' => Config::get('database/username'),
            'password' => Config::get('database/password'),
            'host' => Config::get('database/host'),
            'driver' => Config::get('database/driver'),
        );

        // Create EntityManager
        $this->em = EntityManager::create($connectionOptions, $config);
    }
}