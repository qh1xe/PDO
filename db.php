<?php 

class database{ 
    public $pdo;

public function __construct($db = "periode4", $user="root", $pwd="", $host="localhost") {
    try {
        $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        // set the PDO error mode to exception
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
  }

  public function aanmelden($naam, $email, $password) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $SQL = "INSERT INTO users (naam, email, password) VALUES (:naam, :email, :password)";
    $stmt = $this->pdo->prepare($SQL);
    $stmt->execute([
      "naam" => $naam,
      "email" => $email,
      "password" => $hash
    ]);
   }

   public function login($email) {
    $stmt = $this->pdo->prepare("SELECT * From users WHERE email = :email");
    $stmt->execute(["email"=>$email]);
    return $stmt->fetch();
   }

   public function insertProduct($naam, $prijs, $omschrijving) {
    $SQL = "INSERT INTO product (naam, prijs, omschrijving) VALUES (:naam, :prijs, :omschrijving)";
    $stmt = $this->pdo->prepare($SQL);
    $stmt->execute([
      "naam" => $naam,
      "prijs" => $prijs,
      "omschrijving" => $omschrijving
    ]);
   }
   
};

$pdo = new database;


?>
