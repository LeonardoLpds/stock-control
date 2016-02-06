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
        $urlParams = explode("/", substr($_SERVER['REQUEST_URI'], 1));
        $this->model = isset($urlParams[0]) ? $urlParams[0] : null;
        $this->action = isset($urlParams[1]) ? $urlParams[1] : null;
        
        $this->constructPage();
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