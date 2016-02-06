<?php
namespace app\model;

class Client
{
    private $dataBase;
    
    function __construct()
    {
        $this->dataBase = new Database();
    }

    public function listAllclients()
    {
        return $this->dataBase->listAll("client");
    }

    public function create()
    {
        $fields = array('name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone']);
        return $this->dataBase->create($fields, "client");
    }

    public function delete()
    {
        $id = $_GET["id"];
        return $this->dataBase->delete($id, "client");
    }

    public function selectclient($id)
    {
        return $this->dataBase->select($id, "client");
    }

    public function edit()
    {
        $id = $_GET["id"];
        $fields = array('name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone']);
        return $this->dataBase->edit($id, $fields, "client");
    }
}
