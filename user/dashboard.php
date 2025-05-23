<?php 
session_start();
if (empty($_SESSION['login_status'])) {
    header("Location:login.php");
}

echo "welkom!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../product/product-insert.php"> product toevoegen </a>
     <a href="logout.php"> Logout </a>
</body>
</html>
