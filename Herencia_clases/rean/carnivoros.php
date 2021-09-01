<?php
require 'reino_animal.php';

class carnivoros extends animal 
{
    public function getFrase() 
    {
        $frase = "Animal de clase: " .$this->getClase(). ", " .$this->getComer();
        return $frase;
    }
}

$frase = new carnivoros("carnivoros", "", "comen solo carne", "");
echo $frase->getFrase();

?>