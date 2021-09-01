<?php
require 'reino_animal.php';

class viviparos extends animal 
{
    public function getFrase() 
    {
        $frase = "Animal de clase: " .$this->getClase(). ", " .$this->getNacer();
        return $frase;
    }
}

$frase = new viviparos ("viviparos", "se forma de la madre", "", "");
echo $frase->getFrase();

?>