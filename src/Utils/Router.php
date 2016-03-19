<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 18/03/2016
 * Time: 23:41
 */
namespace Utils;

class Router
{
    /**
     * @var string
     */
    protected $controller = 'Home';

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @var string
     */
    protected $action = 'index';

    /**
     * @var array
     */
    protected $params = array();

    /**
     * Get and split the url
     * @return void
     */
    public function splitUrl()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            //Split the URL
            $url = rtrim($_SERVER['REQUEST_URI'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = substr($url, 1);

            $url = explode('/', $url);
            $num = 1;
            if ($url[0] == 'index.php') {
                $this->controller = (isset($url[1]) ? $url[1] : 'Home');
                $this->action = (isset($url[2]) ? $url[2] : 'index'); //Default action to index method
                $num = 3;
            } elseif($url[0]) {
                $this->controller = (isset($url[0]) ? $url[0] : 'Home');
                $this->action = (isset($url[1]) ? $url[1] : 'index'); //Default action to index method
                $num = 2;
            }
            for ($r = $num; $r < count($url); $r++) {
                $this->params[] = $url[$r];
            }
            //For debugging only
            /*echo 'Area: ' . $this->area . '<br />';
            echo 'Controller: ' . $this->controller . '<br />';
            echo 'Action: ' . $this->action . '<br />';
            echo 'Params: ' . print_r($this->params) . '<br />';*/
        }
    }

    /**
     * Get controller.
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Setter controller.
     * @param mixed $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * Get action.
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set action.
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }
}