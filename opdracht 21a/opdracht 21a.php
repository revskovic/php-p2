<?php

class Animal {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
        echo "Het dier is geboren.<br>";
    }

    public function Info(): void {
        echo "De naam van het dier is: " . $this->name . "<br>";
    }

    public function Eat(): void {
        echo "Het beest eet.<br>";
    }

    public function Sleep(): void {
        echo "Het beest slaapt.<br>";
    }
}

class Bird extends Animal {

    public function Fly(): void {
        echo "De vogel vliegt.<br><br>";
    }
}

// Maak een nieuw Bird object aan genaamd "Eend"
$eend = new Bird("Eend");

// Roep de methoden aan
$eend->Info();
$eend->Eat();
$eend->Sleep();
$eend->Fly();

class Vis extends Animal {
    public function swim(): void {
        echo "De vis zwemt.<br>";
    }
}
$vis = new Vis("karper");

$vis->info();
$vis->eat();
$vis->sleep();
$vis->swim();
?>
