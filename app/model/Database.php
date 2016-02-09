<?php
namespace app\model;
use PDO;

/**
* Class to connect on database
* and to do CRUDs
*/
class Database
{
    //Properties
    private $pdo;

    //Construct
    function __construct()
    {
        $this->startPDOConnection();
    }

    //Functions
    private function startPDOConnection()
    {
        try{
            $this->pdo = new PDO('mysql:host='.DATABASE_HOST.';'.'dbname='.DATABASE_NAME.';', DATABASE_USER, DATABASE_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function select($id, $table)
    {
        return $this->pdo->query("SELECT * FROM {$table} WHERE id = {$id}");
    }

    public function listAll($table)
    {
        return $this->pdo->query("SELECT * FROM {$table}");
    }

    public function create($fieldsAndValues, $table)
    {
        $fields = "(";
        $valuesNames = "(";

        $keys = array_keys($fieldsAndValues);
        foreach ($fieldsAndValues as $field => $value) {
            if (end($keys) == $field){
                $fields .= "$field)";
                $valuesNames .= ":$field)";
            }else{
                $fields .= "$field, ";
                $valuesNames .= ":$field, ";
            }
        }

        $insert = $this->pdo->prepare(
            "INSERT INTO $table $fields 
            VALUES $valuesNames"
        );

        foreach ($fieldsAndValues as $key => $value) {
            $insert->bindValue(":$key", $value);
        }

        try{
            $insert->execute();
            return true;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            return false;
        }
    }

    public function delete($id, $table)
    {
        $result = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
        $result->bindParam(':id', $id);
        try{
            $result->execute();
            return true;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
        }
    }

    public function edit($id, $fieldsAndValues, $table)
    {
        $fields = "";

        $keys = array_keys($fieldsAndValues);
        foreach ($fieldsAndValues as $field => $value) {
            if (end($keys) == $field){
                $fields .= "$field = :$field";
            }else{
                $fields .= "$field = :$field, ";
            }
        }

        $edit = $this->pdo->prepare(
            "UPDATE $table SET $fields
            WHERE id = :id"
        );

        foreach ($fieldsAndValues as $key => $value) {
            $edit->bindValue(":$key", $value);
        }
        $edit->bindParam(':id', $id);

        try{
            $edit->execute();
            return true;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
        }
    }
}