<?php include_once"car.php";

class Sedan extends Car{
    public function run()
    {
        echo "el sedan " . this->color . "avanza";
    }


}