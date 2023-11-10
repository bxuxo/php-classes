<?php

include "Car.php";
include "Cat.php";

// $car = new Car("BMW");
// $car->make_noise( );

$x = new Cat( );
$x->name = "Mincis";

$y = new Cat( );
$y->name = "Brincis";

Cat::meow( );

?>