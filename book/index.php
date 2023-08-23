<?php

class Book
{
    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function displayBookInfo()
    {
        echo "Title: " . $this->title . ", Author: " . $this->author . ", Price: " . $this->price;
    }
}

$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99);
$book->displayBookInfo();