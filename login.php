<?php 

require "../db.php";
session_start();

if (!empty($_SESSION['login_status'])) {
    header("Location:dashboard.php");
}

if (isset($_POST['Submit'])) {
    try {
        $userInfo = $pdo->login($_POST['email']);
        if ($userInfo && password_verify($_POST['password'], $userInfo['password'])) {
            $_SESSION['login_status'] = 1;
            header("Location:dashboard.php");
         } else {
        echo "Verkeerde gegevens";
        }
    } catch (PDOException $e) {
        echo $e;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1> login</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" name="Submit">
    </form>
</body>
</html>
