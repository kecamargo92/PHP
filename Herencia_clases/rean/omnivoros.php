<?php
require 'reino_animal.php';

class omnivoros extends animal 
{
    public function getFrase() 
    {
        $frase = "Animal de clase: " .$this->getClase(). ", " .$this->getComer();
        return $frase;
    }
}

$frase = new omnivoros ("omnivoros", "", "comen de todo", "");
echo $frase->getFrase();

?>