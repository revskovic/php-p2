<?php
class Product {
    public $name;
    public $price;
    public $category;

    // Constructor to initialize the product name and price
    public function __construct($name, $price) {
        $this->name = ucfirst($name);
        $this->price = $price;
    }

    // Setter method to set the category in all uppercase
    public function setCategory($category) {
        $this->category = strtoupper($category);
    }

    // Public function to format the price
    public function formatPrice() {
        return number_format($this->price, 2);
    }
}

// Create 2 objects of the Product class with names and prices
$product1 = new Product("product 1", 29.99);
$product2 = new Product("product 2", 49.99);

// Set categories for the objects
$product1->setCategory("electronics");
$product2->setCategory("furniture");

// Display the properties
echo $product1->name . "<br>";
echo $product1->category . "<br>";
echo $product1->formatPrice() . "<br>";

echo $product2->name . "<br>";
echo $product2->category . "<br>";
echo $product2->formatPrice() . "<br>";
?>
