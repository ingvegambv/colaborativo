<?php include_once "warrior.php"; include_once "magician.php";

$warrior = new Warrior("vega", 100);
$magician = new Magician("dana", 100);

$warrior->showStatus();
$warrior->attack();

$magician->showStatus();
$magician->attack();