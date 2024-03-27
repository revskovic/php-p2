<?php
if(isset($_GET['id'])) {

    echo "mijn id = " . $_GET['id'];

    // haal de rij-info op van fiets met bijbehorende id
    // SELECT * FROM fietsen WHERE id = 1
    
    //connect database
    include "opdracht 9.1 p-2.php";

    //maak een query
    $sql = "SELECT * FROM fietsen WHERE id = :id";

    echo "<br>";
    echo"$sql";
    exit;
    //prepare query
    $stmt = $conn->prepare($sql);
    //uitvoeren
    $stmt->execute(
        [':id'=>$_GET['id']]
    );
    //ophalen alle data
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

    print_r($result);
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
<form action="edit_db.php">
</body>
</html>