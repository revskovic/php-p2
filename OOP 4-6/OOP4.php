<?php
class Product {
    public $name;
    public $price;
    public $category;

    // Setter method to set the name with the first letter capitalized
    public function setName($name) {
        $this->name = ucfirst($name);
    }

    // Setter method to set the category in all uppercase
    public function setCategory($category) {
        $this->category = strtoupper($category);
    }
}

// Create 4 objects of the Product class
$product1 = new Product();
$product2 = new Product();
$product3 = new Product();
$product4 = new Product();

// Set names and categories for the objects
$product1->setName("product 1");
$product1->setCategory("electronics");

$product2->setName("product 2");
$product2->setCategory("furniture");

$product3->setName("product 3");
$product3->setCategory("clothing");

$product4->setName("product 4");
$product4->setCategory("toys");

// Display the properties
echo $product1->name . "<br>";
echo $product1->category . "<br>";

echo $product2->name . "<br>";
echo $product2->category . "<br>";

echo $product3->name . "<br>";
echo $product3->category . "<br>";

echo $product4->name . "<br>";
echo $product4->category . "<br>";
?>
