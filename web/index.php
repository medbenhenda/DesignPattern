<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 18/03/2016
 * Time: 22:51
 */
define("ENVIRONMENT", 'dev');
error_reporting(error_reporting() & ~E_USER_DEPRECATED);

require 'bootstrap.php';
require __DIR__.'./config.php';
$router = new \Utils\Router();
$router->splitUrl();
$controllerName = '\Application\Controller\\'.ucfirst($router->getController()).'Controller';
$actionName = $router->getAction().'Action';

$oController = new $controllerName();
if(method_exists($oController, $actionName)){
    call_user_func_array(array($oController, $actionName), $router->getParams());
} else {
    //Fallback to the default index action
    //$this->controller->index();
    //die("Invalid URL (1)");
    \Utils\Redirect::to(404);
}

