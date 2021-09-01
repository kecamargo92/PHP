<?php
require 'reino_animal.php';

class herbivoros extends animal 
{
    public function getFrase() 
    {
        $frase = "Animal de clase: " .$this->getClase(). ", " .$this->getComer();
        return $frase;
    }
}

$frase = new herbivoros("herbivoros", "", "comen solo plantas", "");
echo $frase->getFrase();

?>