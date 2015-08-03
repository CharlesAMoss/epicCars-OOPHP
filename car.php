<?php
$user_price = $_GET["price"];
$user_miles = $_GET["miles"];


class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $image;

     function __construct($make_model, $price, $miles, $image){
       $this->make_model= $make_model;
       $this->price = $price;
       $this->miles = $miles;
       $this->image = $image;

     }

//Getters
     function getMake(){
       return $this->make_model;
     }
     function getPrice(){
       return $this->price;
     }
     function getMiles(){
       return $this->miles;
     }
     function getImage(){
       return $this->image;
     }

//Setters
    function setMiles($new_miles){
      $this->miles = $new_miles;
      return $new_miles;
    }
}

$honda = new Car("Honda", 2000.00, 200000, "image/honda.jpg");
$ford = new Car("Truck", 3000.00, 30, "image/ford.jpg");
$toyoda = new Car("4 door", 14000.00, 600, "image/yoda.jpg");

$cars = array($honda, $ford, $toyoda);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cars Drive Fast</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <style>

      h1 {
        text-align: center;
      }
      img{
        width: 300px;
      }
      .car {

        float: left;
        margin: 0 20px 20px 0;

      }

      li {

        list-style: none;

      }

      .make, .price, .mlies {



      }



    </style>

  </head>

  <body>

    <header class="page-header">

        <h1>Stop Walking today!</h1>

    </header>

    <div class="container">




    <?php


        foreach ($cars as $car) {
            $make = $car->getMake();
            $price = $car->getPrice();
            $miles = $car->getMiles();
            $image = $car->getImage();

            if ($price <= $user_price && $miles <= $user_miles) {
              echo "<div class='car'>";
                echo "<img src='$image'>";
                echo "<ul>";
                echo "<li class='make'>$make</li>";
                echo "<li class='price'>$ $price</li>";
                echo "<li class='miles'>$miles Miles</li>";
                echo "</ul>";
              echo "</div>";
            }else{
                continue;
            }


      }

      ?>

    </div>

  </body>
</html>
