<?php
// auteur: justin
// functie: verwijder een kleding op basis van de id
include 'functions.php';

// Haal kleding uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deletekleding($_GET['id']) == true){
        echo '<script>alert("kledingcode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_kleding.php'); </script>";
    } else {
        echo '<script>alert("kleding is NIET verwijderd")</script>';
    }
}
?>

