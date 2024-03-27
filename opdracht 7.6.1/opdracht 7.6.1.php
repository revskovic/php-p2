<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    bedrag exclusief BTW <input type="tekst" name="bedrag" value="" placeholder="vul getal in">
    <p><input type="radio" name="btw" value="negen">laag, 9 %<p>
    <p><input type="radio" name="btw" value="negen">hoog, 21 %<p>
    <p><input type="submit" name="uitreken" value="uitrekenen"><p>
    </form>

<?php
    //var_dump($_POST);
    if (isset($_POST['bedrag']) == true) {
    if ($_POST['BTW'] == "negen") {
        $percentage = 1,09;
    } else {
        $percentage = 1,21;
    }

    $uitkomst = $percentage * $_POST['bedrag'];

    echo "bedrag :" .number_format($_POST['bedrag'], 2). "<br>";
    echo "bedrag met Btw" . number_format($uitkomst, 2). "<br>";
}

?>
</body>
</html>