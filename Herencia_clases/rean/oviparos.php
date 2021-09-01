<?php
require "reino_animal.php";

class oviparos extends animal 
{
    public function getFrase ()
    {
        $frase = "Animal de clase: " .$this->getClase(). ", " .$this->getNacer();
        return $frase;
    }
}

$frase = new oviparos("oviparos", "nacen de huevos", "", "");
echo $frase->getFrase();

?>