<?php 

require "../db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        $pdo->producten($_POST['naam'], $_POST['prijs'], $_POST['omschrijving']);
        echo "product toegevoegd!";
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
    <title>product-insert</title>
</head>
<body>
     <h1> product toevoegen </h1>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam" required>
        <input type="text" name="prijs" placeholder="Prijs" required>
        <input type="omschrijving" name="omschrijving" placeholder="Omschrijving" required>
        <input type="submit" name="Submit">
    </form>
</body>
</html>