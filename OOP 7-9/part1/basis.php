<?php
class Product {
    public string $name;
    public float $price;
    public string $currency;

    public function __construct(string $name, float $price, string $currency) {
        $this->name = $name;
        $this->price = $price;
        $this->currency = $currency;
    }

    public function getProduct(): string {
        return "Het product " . $this->name . " kost " . $this->currency . " " . $this->price;
    }
}

// Creëer drie producten met verschillende prijzen
$product1 = new Product(name: "Techno Beats", price: 2, currency: "€");
$product2 = new Product(name: "Classic Vinyl", price: 5, currency: "€");
$product3 = new Product(name: "Jazz Vibes", price: 3.5, currency: "€");

// Toon de producten
echo $product1->getProduct() . "<br>";
echo $product2->getProduct() . "<br>";
echo $product3->getProduct() . "<br>";
?>
