<?php include_once"car.php";

class Pickup extends Car{
    public function run()
    {
        echo "La pickup " . this->color . "avanza";
    }


}