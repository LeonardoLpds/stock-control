<?php
namespace app\model;
use PDO;

/**
* Class to connect on database
* and to do CRUDs
*/
class Database
{
    //Define connection constants
    const HOST = "localhost";
    const DATABASE = "stock-control";
    const USER = "root";
    const PASS = "root";

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
            $this->pdo = new PDO('mysql:host='.self::HOST.';'.'dbname='.self::DATABASE.';', self::USER, self::PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function listAll($table)
    {
        return $this->pdo->query("SELECT * FROM {$table}");
    }

    public function create($fieldsAndValues, $table)
    {
        if (empty($fieldsAndValues) || empty($table)) {
            return false;
        }

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
}