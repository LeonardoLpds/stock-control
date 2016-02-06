<?php
namespace app\controller;
use app\model;

class Controller
{
    //Properties
    private $view;
    private $model;
    
    //Construct
    function __construct()
    {
        $urlParams = explode("/", substr($_SERVER['REQUEST_URI'], 1));
        $this->view = isset($urlParams[0]) ? $urlParams[0] : "home";
        $this->model = isset($urlParams[1]) ? $urlParams[1] : null;
    }
}