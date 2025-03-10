<?php
 require "opdracht2.php";

 if (isset($_POST['Knop'])) {
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];

    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([
    'product_naam' => $product_naam,
    'prijs_per_stuk' => $prijs_per_stuk,
    'omschrijving' => $omschrijving
]);
}

?>

<!DOCTYPE HTML> 
<html lang="lang">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoort" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1> Winkel producten toevoegen <h1>

<form method="POST">
    <input type="text" name="product_naam" placeholder="Product naam">
    <input type="number" name="prijs_per_stuk" placeholder="Prijs per stuk">
    <input type="text" name="omschrijving" placeholder="omschrijving">

    <input type="submit" name="Knop">
    </form>

</html>