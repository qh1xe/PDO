<?php 

require "opdracht2.php";
$pCode = $_GET['product_code'];

if (isset($_POST['Submit'])) {
  $product_naam = $_POST['product_naam'];
  $prijs_per_stuk = $_POST['prijs_per_stuk'];
  $omschrijving = $_POST['omschrijving'];

  $sql = "UPDATE producten SET product_naam =:product_naam, prijs_per_stuk =:prijs_per_stuk, omschrijving =:omschrijving WHERE product_code = :pCode ";
  $stmt = $dbh->prepare($sql);
  $stmt->execute([
  'pCode' => $pCode,
  'product_naam' => $product_naam,
  'prijs_per_stuk' => $prijs_per_stuk,
  'omschrijving' => $omschrijving
]);

}


?>

<!DOCTYPE html>
<html>
<body>

<form method="POST" action="update.php?product_code=<?php echo $pCode ?>">
  <label for="fname">product_naam</label><br>
  <input type="text" id="pname" name="product_naam"><br>
 
  <label for="lname">prijs_per_stuk</label><br>
  <input type="text" id="lname" name="prijs_per_stuk"><br>

  <label for="lname">omschrijving</label><br>
  <input type="text" id="lname" name="omschrijving"><br><br>

  <input type="submit" value="Submit" name="Submit">
</form> 




</body>
</html>