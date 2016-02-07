<?php
namespace app\model;

class Order
{
    private $dataBase;
    
    function __construct()
    {
        $this->dataBase = new Database();
    }

    public function listAllOrders()
    {
        return $this->dataBase->listAll("product_order");
    }

    public function create()
    {
        $fields = array('id_product' => $_POST['id_product'], 'id_client' => $_POST['id_client']);
        return $this->dataBase->create($fields, "product_order");
    }

    public function delete()
    {
        $id = $_GET["id"];
        return $this->dataBase->delete($id, "product_order");
    }

    public function selectOrder($id)
    {
        return $this->dataBase->select($id, "product_order");
    }

    public function selectProduct($id)
    {
        return $this->dataBase->select($id, "product");
    }

    public function selectClient($id)
    {
        return $this->dataBase->select($id, "client");
    }

    public function edit()
    {
        $id = $_GET["id"];
        $fields = array('id_product' => $_POST['id_product'], 'id_client' => $_POST['id_client']);
        return $this->dataBase->edit($id, $fields, "product_order");
    }

    public function getAllProducts()
    {
        return $this->dataBase->listAll("product");
    }

    public function getAllClients()
    {
        return $this->dataBase->listAll("client");
    }
}
