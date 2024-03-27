<?php
// auteur: justin
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deletekroeg($_GET['id']) == true){
        echo '<script>alert("kroegcode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_kroeg.php'); </script>";
    } else {
        echo '<script>alert("kroeg is NIET verwijderd")</script>';
    }
}
?>

