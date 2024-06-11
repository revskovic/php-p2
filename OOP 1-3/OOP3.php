<?php
class Product {
    public $name;
    public $price;

    // Constructor to initialize the product name and price
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Public function to format the price
    public function formatPrice() {
        return number_format($this->price, 2);
    }
}

// Create 4 objects of the Product class with names and prices
$product1 = new Product("Product 1", 29.99);
$product2 = new Product("Product 2", 49.99);
$product3 = new Product("Product 3", 19.99);
$product4 = new Product("Product 4", 9.99);

// Display the properties using echo and <br>
echo $product1->name . "<br>";
echo $product2->name . "<br>";
echo $product3->name . "<br>";

// Change one property as shown in the video
$product3->name = "Updated Product 3";

// Display the updated property
echo $product3->name . "<br>";

// Echo the formatted price of a product
echo $product1->formatPrice();
?>
