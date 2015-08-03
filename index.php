<?php
include('car.php');


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Cars Drive Fast</title>
  </head>
  <body>

    <h1> I'm the h1 </h1>


    <?php

      foreach ($cars as $car) {
        $miles = $car->getMiles();
        echo "$car->make_model " . "$" . "$car->price" . " " . "$miles ";


      }

      ?>



  </body>
</html>
