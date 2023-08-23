<?php

class Product
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getTotalPrice()
    {
        return $this->price * $this->quantity;
    }
}

$product = new Product("BMW", 2000, 5);

echo "Product Name: " . $product->getName() . "<br>";
echo "Product Price: $" . $product->getPrice() . "<br>";
echo "Product Quantity: " . $product->getQuantity() . "<br>";
echo "Total Price: $" . $product->getTotalPrice() . "<br>";