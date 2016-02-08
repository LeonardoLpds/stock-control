<?php
namespace app\controller;
use app\view\View;


class Controller
{
    //Properties
    private $model;
    private $action;
    private $view;
    
    //Construct
    function __construct()
    {
        $siteUrl = str_replace("/".SITE_PATH, "/", $_SERVER['REQUEST_URI']);
        $urlParams = explode("/", substr($siteUrl, 1));
        
        if ($this->isControllerRequest($urlParams[0])) {
            new ObjectsController();
            return true;
        }
        
        $this->getParameters($urlParams);
        $this->constructPage();
    }

    private function isControllerRequest($param)
    {
        if (strtolower($param) == "controller") {            
            return true;
        }
        return false;
    }

    private function getParameters($urlParams)
    {
        $this->model = isset($urlParams[0]) ? $urlParams[0] : null;
        $this->action = isset($urlParams[1]) ? $urlParams[1] : null;
    }

    private function constructPage()
    {
        $this->view = new View();
        $path = isset($this->model) ? $this->model : "";
        $page = isset($this->action) ? $this->action : "home";
        $object = $this->constructObject($this->model);
        
        $this->view->constructView($path . DIRECTORY_SEPARATOR . $page, $object);
    }

    private function constructObject($class = null){
        if (isset($class) && !empty($class)) {
            $class = "app\\model\\".ucfirst($class);
            $object = new $class();
            return $object;
        }
        return null;
    }
}