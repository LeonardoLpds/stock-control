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

    public function create()
    {
        $fields = array('name' => $_POST['name'], 'description' => $_POST['description'], 'price' => $_POST['price']);
        return $this->dataBase->create($fields, "product");
    }

    public function delete()
    {
        $id = $_GET["id"];
        return $this->dataBase->delete($id, "product");
    }
}
