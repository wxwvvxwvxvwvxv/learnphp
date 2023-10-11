<?php
namespace App;
use PDO;
use PDOException;
class DB{
    private $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            
            
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($table, $class){
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function insert($table,$fields){
        unset($fields['id']);
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        $fieldValuesText = implode("', '", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText)
        VALUES ('$fieldValuesText')";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}