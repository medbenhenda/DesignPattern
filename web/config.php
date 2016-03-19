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

//Bundles - Seperated from main config as I can see this getting big
$GLOBALS['bundles'] = array(
    'js' => array( // JS bundles
        'main' => array(
            '/assets/js/jquery-1.11.0.min.js',
            '/assets/js/bootstrap.min.js',
        )
    ),
    'css' => array( // CSS bundles
        'main' => array(
            '/assets/css/bootstrap.min.css',
            '/assets/css/bootstrap-theme.min.css',
            '/assets/css/app.css',
        )
    )
);