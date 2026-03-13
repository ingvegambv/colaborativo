<?php include_once"car.php";

class Sedan extends Car{
    public function run()
    {
        echo "El sedan " . this->color . "avanza";
    }


}