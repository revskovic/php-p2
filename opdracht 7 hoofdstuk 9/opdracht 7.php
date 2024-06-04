<?php

// definitie van de class Fruit
class Fruit{
//properties
public $name;

//methodes

}

//maak een object appel op basis van de class Fruit
$appel = new Fruit();

//vul de property name van het object
$appel->name = "Elstar";

var_dump($appel);


//maak 2e object banaan
$banaan = new Fruit();
$banaan->name = "Banaan";
var_dump($banaan);
?>