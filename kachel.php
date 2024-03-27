<?php
    // auteur: justin
    // functie: zet de kachel aan
 
    // temp -10 - -1 graden: kachel hoge stand
    // temp 0-18: kachel normale stand
    // temp > 18: kachel uit
 
 
    // initialisatie van de tempartuur
    $temp = -1;
 echo "de temperatuur is $temp <br>";
    if ($temp <= 0 && $temp >= -10) {
        echo "Hoge stand";
    } elseif($temp >= 0 && $temp <=18){ // test temp 0-18
        echo "normale stand";
    }
    else{
echo "doe niks <br>";

    }