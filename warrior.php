<?php include_once "character.php";
class Warrior extends Character{
    
    public function attack()
    {
        echo $this->name . " Ataca con espada <br>";
    }
}

