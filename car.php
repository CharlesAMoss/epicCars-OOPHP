<?php
$user_price = $_GET["price"];


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
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cars Drive Fast</title>

  <style>
    img{
      max-width: 300px;
    }
  </style>
  </head>
  <body>

    <h1> I'm the h1 </h1>


    <?php


        foreach ($cars as $car) {
            $miles = $car->getMiles();
            if ($car->price <= $user_price) {
                echo "<img src='$car->image'> $car->make_model " . "$" . "$car->price" . " " . "$miles ";
            }else{
                continue;
            }


      }

      ?>



  </body>
</html>
