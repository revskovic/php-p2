<?php
//auteur: justin

//dagtijd opdracht

//uitvoering
date_default_timezone_set('Europe/Amsterdam');

$uur = date('H');


if ($uur >= 6 && $uur < 12) {
    $dagdeel = 'ochtend';
} elseif ($uur >= 12 && $uur < 18) {
    $dagdeel = 'middag';
} elseif ($uur >= 18 && $uur < 24) {
    $dagdeel = 'avond';
} else {
    $dagdeel = 'nacht';
}

echo "Het is momenteel $dagdeel.<br>";


//2de deel
date_default_timezone_set('Europe/Amsterdam');

$uur = date('H');

$dagdeel = match (true) {
    ($uur >= 6 && $uur < 12) => 'ochtend',
    ($uur >= 12 && $uur < 18) => 'middag',
    ($uur >= 18 && $uur < 24) => 'avond',
    default => 'nacht',
};

echo "Het is momenteel $dagdeel.<br>";

//3de deel

$variabele1 = 15;
$variabele2 = 8;

// Bepaal de grootste en kleinste waarde
$grootste = max($variabele1, $variabele2);
$kleinste = min($variabele1, $variabele2);

// Voer de vereiste bewerkingen uit
$resultaat = ($grootste * 2) + $kleinste;

echo "De grootste waarde is: $grootste<br>";
echo "De kleinste waarde is: $kleinste<br>";
echo "Het resultaat is: $resultaat<br>";

//4de deel

$producten = [
    'Laptop' => 200,
    'Televisie' => 120,
    'Smartphone' => 50,
    'Koffiezetapparaat' => 80,
];


foreach ($producten as $product => $prijs) {
    if ($prijs > 150) {

        $producten[$product] *= 1.19;
    } elseif ($prijs < 55) {

        $producten[$product] *= 1.11;
    }
}


foreach ($producten as $product => $prijs) {
    echo "$product: €" . number_format($prijs, 2) . "<br>";
}
?>

