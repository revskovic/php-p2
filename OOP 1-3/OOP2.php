<?php
class Product {
    public $name;

    // Constructor to initialize the product name
    public function __construct($name) {
        $this->name = $name;
    }
}

// Create 4 objects of the Product class with names
$product1 = new Product("Product 1");
$product2 = new Product("Product 2");
$product3 = new Product("Product 3");
$product4 = new Product("Product 4");

// Display the properties using echo and <br>
echo $product1->name . "<br>";
echo $product2->name . "<br>";
echo $product3->name . "<br>";

// Change one property as shown in the video
$product3->name = "Updated Product 3";

// Display the updated property
echo $product3->name . "<br>";
?>
