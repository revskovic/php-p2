<?php

// definitie van de class Fruit
class Fruit{
//properties
public $name;
public $color;
public $expiryDate;
private $price;

//methodes
public function isExpired(){
    //print expirydate
    //echo $this->expiryDate . "<br>";

    //vergelijk currentdate met expirydate
    //als currentdate > expirydate
    
    //bepaal currentdate
    $currentDate = 2024-05-28;

    if($currentDate > $thisexpiryDate){
        return true;
    } else{
        return true:
    }

}

public function __construct($name, $color){
    echo "nieuwe object Fruit aangemaakt<br>";
    $this->name = $name;
    $this->color = $color;
}


public function setPrice($price){
    $this->price = $price;
}

public function getPrice(){
    return $this->price;
}

}

//maak een object appel op basis van de class Fruit
$appel = new Fruit("Elstar", "RoodGeel");

//vul de property name van het object
$appel->name = "Elstar";
$appel->color = "RoodGeel";
$appel->setPrice(1.50);
$appel->expiryDate = "2024-06-01";

//is de appel houdbaar?
if($appel->isExpired() == true){
echo "Over de datum<br>";
} else{
echo "Eetbaar<br>";
}


var_dump($appel);
exit;
echo "de naam van het object is:" . $appel->name . "<br>";
echo "de prijs van het object is:" . $appel->getPrice() . "<br>";


//maak 2e object banaan
$banaan = new Fruit();
$banaan->name = "Banaan";
$banaan->color = "Geel";
var_dump($banaan);
?>