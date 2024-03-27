<?php
//auteur: justin
//functie: toevoegen van 1 fiets
//test of toevoeg knop is ingedrukt
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Er is gepost<br>";
    print_r($_POST);

//connect database
include "opdracht 9.1 p-2.php";

//maak een query
$sql = "INSERT INTO fietsen (merk, type, prijs, foto) 
       VALUES (:merk, :type, :prijs, :foto);";
//prepare query
$query = $conn->prepare($sql);
//uitvoeren
$status = $query->execute(
    [
        ':merk'=>$_POST['merk'],
        ':type'=>$_POST['type'],
        ':prijs'=>$_POST['prijs'],
        ':foto'=>$_POST['foto']
    ]
);
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
<h2>voeg fiets toe</h2>
<form action="" method="post">
    
<label for="merk">merk:</label>
<input type="text" id="merk" name="merk" required><br>

<label for="naam">naam:</label>
<input type="text" id="naam" name="naam" required><br>

<label for="prijs">prijs:</label>
<input type="text" id="prijs" name="prijs" required><br>

<label for="foto">foto:</label>
<input type="text" id="foto" name="foto" required><br>

<input type="submit" value="toevoegen">
</body>
</html>