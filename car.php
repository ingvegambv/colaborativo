<?php
abstract class Car {
    protected $color;
    protected $brand;

    public function __construct(){

        $this->color = $color;
        $this->brand = $brand;

    }

    public function showInfoCar()
    {
        echo $this->color . "es el color del carro" . $this->brand . "es la marca del coche";

    }

    abstract public function run();

}



