<?php

$host = "localhost";
$db = "winkel";
$user = "root";
$pass = "";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
    echo "connection failed";
}
?>
