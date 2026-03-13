<?php include_once "character.php";
class Magician extends Character{

    public function attack()
    {
        echo $this->name . " Ataca con hechizo <br>";
    }
}