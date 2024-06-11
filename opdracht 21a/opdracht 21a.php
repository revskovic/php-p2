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
class Parrot extends Bird {
    public function Eat(): void {
        echo "De vogel eet planten.<br>";
    }
}
class Roofvogel extends Bird {
    public function Eat(): void {
        echo "De vogel eet vlees.<br>";
    }
}

// Maak een nieuw Bird object aan genaamd "Eend"
$eend = new Bird("Eend");

// Roep de methoden aan
$eend->Info();
$eend->Eat();
$eend->Sleep();
$eend->Fly();

$parkiet = new Parrot("parkiet");

$parkiet->Info();
$parkiet->Sleep();
$parkiet->Eat();
$parkiet->Fly();

$eagle = new Roofvogel("Eagle");

$eagle->Info();
$eagle->Eat();
$eagle->Sleep();
$eagle->Fly();

class Vis extends Animal {
    public function swim(): void {
        echo "De vis zwemt.<br>";
    }
}
$vis = new Vis("karper");

$vis->Info();
$vis->Eat();
$vis->Sleep();
$vis->Swim();
?>
