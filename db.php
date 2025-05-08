<?php 

class database{ 
    public $pdo;

public function __construct($db = "periode4", $user="root", $pwd="", $host="localhost") {
    try {
        $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        // set the PDO error mode to exception
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
  }
}

$pdo = new database;


?>