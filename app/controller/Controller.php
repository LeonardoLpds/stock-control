<?php
namespace app\controller;
use app\model;

class Controller
{
    //Properties
    private $model;
    private $action;
    
    //Construct
    function __construct()
    {
        $urlParams = explode("/", substr($_SERVER['REQUEST_URI'], 1));
        $this->model = isset($urlParams[0]) ? $urlParams[0] : null;
        $this->action = isset($urlParams[1]) ? $urlParams[1] : null;
    }
}