<?php
    // functie: formulier en database insert kleding
    // auteur: justin

    echo "<h1>Insert kleding</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertkleding($_POST) == true){
            echo "<script>alert('kleding is toegevoegd')</script>";
        } else {
            echo '<script>alert("kleding is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="soort">soort:</label>
        <input type="text" id="soort" name="soort" required><br>

        <label for="kleur">kleur:</label>
        <input type="text" id="kleur" name="kleur" required><br>

        <label for="prijs">Prijs:</label>
        <input type="number" id="prijs" name="prijs" required><br>

        <label for="maat">maat:</label>
        <input type="text" id="maat" name="maat" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='crud_kleding.php'>Home</a>
    </body>
</html>
