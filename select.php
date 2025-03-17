<?php 

require "opdracht2.php";

$sql = "SELECT * FROM producten";
$rows = $dbh->query($sql)->fetchAll();


?>

<!DOCTYPE html>
<html>
<body>
    <table>
        <tr>
        <th>product code</th>
        <th>product naam</th>
        <th>prijs per stuk</th>
        <th>omschrijving</th>
        <th> </th>
        </tr>
        <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $row['product_code'] ?> </td>
                <td><?php echo $row['product_naam'] ?></td>
                <td><?php echo $row['prijs_per_stuk'] ?></td>
                <td><?php echo $row['omschrijving'] ?></td>
                <td> <button type="button">Edit</button> </td>
                <td> <button type="button">Delete</button> </td>
                
            </tr>
        <?php } ?>
          


    </table>


</body>


</html>