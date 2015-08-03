<?php
class Car
{
    public $make_model;
    public $price;
    private $miles;
    public $image;

     function __construct($make_model, $price, $miles, $image){
       $this->make_model= $make_model;
       $this->price = $price;
       $this->miles = $miles;
       $this->image = $image;

     }

     function getMiles()
     {
       return $this->miles;
     }
}

$honda = new Car("Honda", 2000.00, 200000, "image/honda.jpg");
$ford = new Car("Truck", 3000.00, 30, "image/ford.jpg");
$toyoda = new Car("4 door", 14000.00, 60000, "image/yoda.jpg");

$cars = array($honda, $ford, $toyoda);
