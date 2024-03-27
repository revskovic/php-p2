<?php
    // functie: update kroeg
    // auteur: justin

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatekroeg($_POST) == true){
            echo "<script>alert('kroeg is gewijzigd')</script>";
        } else {
            echo '<script>alert("kroeg is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['kroegcode'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['kroegcode'];
        $row = getkroeg($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig kroeg</title>
</head>
<body>
  <h2>Wijzig kroeg</h2>
  <form method="post">
    
    <input type="hidden" id="naam" name="id" required value="<?php echo $row['kroegcode']; ?>"><br>
    <label for="naam">naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="adres">adres:</label>
    <input type="text" id="adres" name="adres" required value="<?php echo $row['adres']; ?>"><br>

    <label for="plaats">Plaats:</label>
    <input type="text" id="plaats" name="plaats" required value="<?php echo $row['plaats']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_kroeg.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen id opgegeven<br>";
    }
?>