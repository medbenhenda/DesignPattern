<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 19/03/2016
 * Time: 00:18
 */
namespace Application\Controller;

use Common\Filebundler;
use DebugBar\StandardDebugBar;
use \Utils\Config;

/**
 * Controller baseclass for all application classes
 */
class BaseController {

    protected $debugbar, $debugbarRenderer;


    /**
     * Automatically loaded with every class
     */
    public function __construct(){
        //Load the debug bar (via composer)
        $this->debugbar = new StandardDebugBar();
        $this->debugbarRenderer = $this->debugbar->getJavascriptRenderer();

        //For testing
        $this->debugbar['messages']->info('Parent controller loaded');

    }

    public function render($view, $data_array = array()){

        //load the twig view engine
        $twig_loader = new \Twig_Loader_Filesystem(Config::get("views/path"));
        $twig = new \Twig_Environment($twig_loader);



        //Render debugbar parts
        $twig->addFunction(
            new \Twig_SimpleFunction('debugbar', function($section){
                //if(ENVIRONMENT=='dev'){
                    return $this->debugbarRenderer->$section();
                //}
                //return '';
            })
        );

        //render a view and pass data to be rendered
        echo $twig->render($view . Config::get("views/file_type"), $data_array);
    }

}