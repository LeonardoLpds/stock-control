<?php
namespace app\model;

class Product
{
    private $dataBase;
    
    function __construct()
    {
        $this->dataBase = new Database();
    }
}