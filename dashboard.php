<?php 
session_start();
if (empty($_SESSION['login_status'])) {
    header("Location:login.php");
}

echo "welkom!";

?>