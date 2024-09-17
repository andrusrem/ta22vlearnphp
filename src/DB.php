<?php 
namespace App;

use App\Models\Post;
use PDO;
use PDOException;
class DB {
    public $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($table, $class){
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
      
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function find($table, $class, $id){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
        $stmt->execute();
      
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }

    public function insert($table, $fields){
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ',$fieldNames);
        $valuesText = implode("', '", $fields);
       
        $sql = "INSERT INTO $table ($fieldNamesText)
        VALUES ('$valuesText')";

        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}