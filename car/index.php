<?php



class car
{

    private $brand;
    private $model;
    private $color;
    private $price;

    public function __construct($brand, $model, $color, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }
    public function getCarDetails()
    {
        return "Brand: " . $this->brand . "<br>"
            . "Model: " . $this->model . "<br>"
            . "Color: " . $this->color . "<br>"
            . "Price: $" . $this->price . "<br>";
    }

}

$car = new Car("Toyota", "Camry", "Silver", 25000);

$carDetails = $car->getCarDetails();

echo $carDetails;