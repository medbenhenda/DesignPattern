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
define("ENVIRONMENT", 'dev');

$GLOBALS['config'] = array(
    'views' => array (
        'path' => '../src/Application/views/',
        'file_type' => '.twig'
    )
);
