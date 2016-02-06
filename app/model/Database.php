<?php
namespace app\model;

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
}