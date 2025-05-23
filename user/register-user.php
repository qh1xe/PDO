<?php 

require "../db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        $pdo->aanmelden($_POST['naam'], $_POST['email'], $_POST['password']);
        echo "Account aangemaakt!";
    } catch (PDOException $e) {
        echo $e;
    };
}; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1> aanmeld formulier </h1>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" name="Submit">
    </form>
</body>
</html>
