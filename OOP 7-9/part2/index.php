<?php
require_once 'Music.php';

// Maak een nieuw muziek item aan
$music1 = new Music(name: 'Bach', genre: 'Klassiek', listen: 3);

// Toon de naam van het muziek item
echo $music1->getName() . "<br>";

// Toon de volledige informatie van het muziek item
var_dump($music1);
?>
