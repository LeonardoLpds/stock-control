<?php
namespace app\controller;

class ObjectsController
{
    //Properties
    private $class;
    private $object;
    private $action;
    
    //Construct
    function __construct()
    {
        $urlParams = explode("/", substr($_SERVER['REQUEST_URI'], 1));
        $this->class = isset($urlParams[1]) ? "\\app\\model\\".ucfirst($urlParams[1]) : null;
        $this->action = isset($urlParams[2]) ? $urlParams[2] : null;
        $this->object = $this->crateObject($this->class);
        if($this->callFunction($this->object, $this->action)){
            header("Location: /".$urlParams[1]."/list");
        }
    }

    //Functtions
    private function crateObject($class)
    {
        if (isset($class) && !empty($class)) {
            return new $class();
        }
        return null;
    }

    private function callFunction($object, $function)
    {
        if ((isset($object) && !empty($object)) && (isset($function) && !empty($function))) {
            if (strpos($function, "?")) {
                $function = strstr($function, "?", true);
            }
            return $object->$function();
        }
    }

}