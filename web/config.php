<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 18/03/2016
 * Time: 23:09
 */

/** ENVIRONMENT Should be: dev, prod
 * 'dev' shows all errors & debugBar
 * 'prod' logs errors to log
 */

$GLOBALS['config'] = array(
    //Database to connect to
    'database' => array(
        'host' => '127.0.0.1',
        'db' => 'md_design_pattern',
        'username' => 'root',
        'password' => '',
        'driver' => 'pdo_mysql'
    ),
    'views' => array (
        'path' => '../src/Application/views/',
        'file_type' => '.twig'
    )
);
