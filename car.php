<?php
class Car
{
    public $make_model;
    public $price;
    private $miles;

     function __construct($make_model, $price, $miles){
       $this->make_model= $make_model;
       $this->price = (float) $price;
       $this->miles = $miles;

     }

     function getMiles()
     {
       return $this->miles;
     }
}

$honda = new Car("Honda", 2000.00, 200000);
$ford = new Car("Truck", 3000.00, 30);
$toyoda = new Car("4 door", 14000.00, 60000);

$cars = array($honda, $ford, $toyoda);
