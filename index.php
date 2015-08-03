<?php
include('car.php');


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
        echo "<img src='$car->image'> $car->make_model " . "$" . "$car->price" . " " . "$miles ";


      }

      ?>



  </body>
</html>
