<?php
namespace app\model;

class Product
{
    private $dataBase;
    
    function __construct()
    {
        $this->dataBase = new Database();
    }

    public function listAllProducts()
    {
        return $this->dataBase->listAll("product");
    }
}