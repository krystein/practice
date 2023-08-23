<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $quantity;

    public function __construct($id, $name, $price, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function calculateTotalValue()
    {
        return $this->price * $this->quantity;
    }

    public function getProductDetails()
    {
        return "id: " . $this->id . "<br>"
            . "name: " . $this->name . "<br>"
            . "price: $" . $this->price . "<br>"
            . "quantity: " . $this->quantity . "<br>"
            . "total value: $" . $this->calculateTotalValue() . "<br>";
    }
}

$Product = new Product("XVM123", "BMW", 2000, 5);

$productDetails = $Product->getProductDetails();

echo $productDetails;