<?php include_once"car.php";

class Pickup extends Car{
    public function run()
    {
        echo "la pickup " . this->color . "avanza";
    }


}