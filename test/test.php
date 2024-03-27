<?php
date_default_timezone_set('Europe/Amsterdam');

$uur = date('H');

$dagdeel = match (true) {
    ($uur >= 6 && $uur < 12) => 'ochtend',
    ($uur >= 12 && $uur < 18) => 'middag',
    ($uur >= 18 && $uur < 24) => 'avond',
    default => 'nacht',
};

echo "Het is momenteel $dagdeel.";
?>
