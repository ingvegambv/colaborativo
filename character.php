<?php
abstract class Character {
    protected $name;
    protected $life;
    
    public function __construct($name, $life)
    {
        $this->name = $name;
        $this->life = $life;
    }

    public function showStatus()
    {
        echo $this->name . " Tiene " . $this->life . " puntos de vida <br>";  
    }

    abstract public function attack();
}
