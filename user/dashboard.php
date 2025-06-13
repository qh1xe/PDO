<?php 

require "../db.php";

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
    <title>dashboard</title>
</head>
<body>
     <a href="logout.php"> Logout </a>

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
                <td><?php echo $row[$product_naam] ?></td>
                <td><?php echo $row[$prijs_per_stuk] ?></td>
                <td><?php echo $row[$omschrijving] ?></td>
                <td> <button type="button"><a href="update.php?product_code=<?php echo $row['product_code'] ?>">Edit</a></button> </td>
                <td> <button type="button">Delete</button> </td>
                
            </tr>
        <?php } ?>
        <a href="../product/product-insert.php"> product toevoegen </a>
          


    </table>

</body>
</html>
