<?php
class Product {
    public $name;
    public $price;
    public $category;
    public $currency;

    // Constructor to initialize the product name, price, and currency
    public function __construct($name, $price, $currency = '€') {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    // Setter method to set the category in all uppercase
    public function setCategory($category) {
        $this->category = strtoupper($category);
    }

    // Public function to format the price
    public function formatPrice() {
        return $this->currency . number_format($this->price, 2);
    }
}

// Create 1 object of the Product class with name, price, and currency
$product1 = new Product("product 1", 29.99, '$');

// Comment out the second object
// $product2 = new Product("product 2", 49.99, '$');

// Set category for the object
$product1->setCategory("electronics");

// Display the properties
echo $product1->name . "<br>";
echo $product1->category . "<br>";
echo $product1->formatPrice() . "<br>";
?>
