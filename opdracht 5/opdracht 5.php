<?php
//auteur: justin

//opdracht 5

//uitvoer
$getal = 17;

if ($getal % 2 == 0) {
    echo "$getal is een even getal.";
} else {
    echo "$getal is een oneven getal.<br>";
}

//2de deel
date_default_timezone_set('Europe/Amsterdam');

$huidigUur = date('H');
$temperatuur = 22;
$luchtvochtigheid = 80;


if ($huidigUur >= 17 || $temperatuur < 20 || $luchtvochtigheid < 85) {
    echo "Airco is uitgeschakeld.<br>";
} else {
    echo "Airco is ingeschakeld.<br>";
}
//3de deel
$telefoonPrijs = 1000;
$spaargeld = 800;

$tekort = $telefoonPrijs - $spaargeld;

if ($tekort > 250) {
    echo "Helaas, je hebt te weinig spaargeld. Het tekort is €$tekort. Het is misschien een goed idee om een baantje te zoeken.";
} elseif ($tekort <= 250 && $tekort > 0) {
    echo "Je bent er bijna! Het tekort is €$tekort. Nog even sparen.<br>";
} else {
    $overVoorHoesje = $spaargeld - $telefoonPrijs;
    echo "Gefeliciteerd! Je kunt de telefoon kopen. Je hebt nog €$overVoorHoesje over voor een hoesje.<br>";
}

//4de deel
$leeftijd = 17;
$heeftStempas = false;


if ($leeftijd >= 16) {
    echo "Gefeliciteerd, je mag een scooter rijbewijs halen!";
} else {
    echo "Sorry, je bent nog te jong om een scooter rijbewijs te halen.";
}


echo "<br><br>";


if ($leeftijd >= 18) {
    
    if ($heeftStempas) {
        echo "Gefeliciteerd, je mag stemmen!";
    } else {
        echo "Sorry, je mag niet stemmen omdat je geen stempas hebt ontvangen.";
    }
} else {
    echo "Sorry, je bent nog te jong om te stemmen.";
}
?>

