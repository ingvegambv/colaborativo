<?php include_once "sedan.php"; include_once "pickup.php";

$sedan = new Sedan ("blanco", "chevrolet");
$pickup = new Pickup ("azul", "dodge");


$sedan->showInfoCar();
$sedan->run();

$pickup->showInfoCar();
$pickup->run();



