<?php

class Product {
    private $id;
    private $name;
    private $price;
    
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    
}
class book extends Product
{
    private $author;
    private $genre;
    public function __construct($author, $genre){
        $this->author = $author;
        $this->genre = $genre;
    }

    public function getAuthor(){
       return $this->author;
    }
    public function setAuthor($author){
        return $this->author = $author;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        return $this->genre = $genre;
    }
            public function getDetails()
            {
                return "Author: {$this->author} Genre: {$this->genre}";
            }
}

class Electronics extends Product
{
    private $brand;
    private $model;
    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($brand){
        return $this->brand = $brand;
    }

    public function getModel(){
        return $this->model;
    }

    public function setModel($model){
        return $this->model = $model;
    }
            public function getDetails()
            {
                return "Brand: {$this->brand} Model: {$this->model}";
            }
}
class Clothing extends Product
{
    private $size;
    private $color;
    public function __construct($size, $color){
        $this->size = $size;
        $this->color = $color;
    }

    public function getSize(){
        return $this->size;
    }
    public function setSize($size){
        return $this->size = $size;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color = $color;
    }
            public function getDetails()
            {
                return "Size: {$this->size} Color: {$this->color}";
            }
}

$book = new book("Nworah christian", "scientific");
$electronic = new Electronics("Samsung", "XMZ230");
$clothing = new Clothing("L", "Black");

echo $book->getDetails()."<br>";
echo $electronic->getDetails() . "<br>";
echo $clothing->getDetails() . "<br>";