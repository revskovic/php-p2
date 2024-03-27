<?php
//auteur: justin
//functie: for loop

$som = 0;
for ($teller=100; $teller <= 1000; $teller=$teller=+10){
    echo "teller $teller<br>";

    $som = $som + $teller;
    echo "som: $som<br>";
}

$a = 0;
while ($a <= 100){
    echo "a: $a<br>";
    if($a < 10){
        $a++;
    }   else{
        $a = $a + 10;
    }
}


?>