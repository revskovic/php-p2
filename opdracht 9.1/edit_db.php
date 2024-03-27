<?php

//auteur: justin
//functie: data fiets update in database

//test of er data gepost is
if($_SERVER['REQUEST_METHOD']  == "POST"){
    print_r($_POST);}

    // doe update in de database
    // UPDATE 'fietsen' SET 'prijs' = '700'
    // WHERE 'fietsen' . 'id' = 1;

//connect database
include "connect.php";

//maak een query
    $sql = "UPDATE fietsen SET 
    merk = :merk,
    type = :type,
    prijs = :prijs 
    WHERE id = :id";

//prepare query
$stmt = $conn->prepare($sql);
//uitvoeren
$stmt->execute([
     ':merk'=>$_POST['merk'],
     ':type'=>$_POST['type'],
     ':prijs'=>$_POST['prijs'],
     ':id'=>$_POST['id']
]);

if($status) {
header("location: opdracht 9.1 p-2.php");
exit();
} else{
    echo "update is fout gegaan<br>";
}
?>