<?php
//auteur: justin
//functie: uitleg datum functie

//initialisatie


//main
//l voor week dag, d voor cijfer datum van de dag, F voor de maand, Y voor het jaar.
echo "De datum is: ". date('l d F Y');
echo "<br>";
//z voor de dag van het jaar.
echo "Vandaag is het de " . date("z") . "e dag van het jaar";
echo "<br>";
//N voor dag van de week
echo "Wednesday is de " . date("N") . "e dag van de week";
echo "<br>";
//F voor de maand.
echo "De maand " . date("F") . " heeft in totaal 30 dagen";
echo "<br>";
//Y voor het jaar
echo "Het jaar " . date("Y") . " is geen schrikkeljaar";
?>