<?php include_once "sedan.php"; include_once "pickup.php";

$sedan = new Sedan ("Blanco", "Chevrolet");
$pickup = new Pickup ("Azul", "Dodge");


$sedan->showInfoCar();
$sedan->run();

$pickup->showInfoCar();
$pickup->run();



