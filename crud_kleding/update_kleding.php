<?php
    // functie: update kleding
    // auteur: justin

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatekleding($_POST) == true){
            echo "<script>alert('kleding is gewijzigd')</script>";
        } else {
            echo '<script>alert("kleding is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['id'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['id'];
        $row = getkleding($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig kleding</title>
</head>
<body>
  <h2>Wijzig kleding</h2>
  <form method="post">
    
    <input type="hidden" id="soort" name="id" required value="<?php echo $row['id']; ?>"><br>
    <label for="soort">soort:</label>
    <input type="text" id="soort" name="soort" required value="<?php echo $row['soort']; ?>"><br>

    <label for="kleur">kleur:</label>
    <input type="text" id="kleur" name="kleur" required value="<?php echo $row['kleur']; ?>"><br>

    <label for="maat">maat:</label>
    <input type="text" id="maat" name="maat" required value="<?php echo $row['maat']; ?>"><br>

    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs" required value="<?php echo $row['prijs']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_kleding.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen id opgegeven<br>";
    }
?>