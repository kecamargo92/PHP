<?php
require 'reino_animal.php';

class terrestres extends animal 
{
    public function getFrase() 
    {
        $frase = "Animal de clase: " .$this->getClase(). ", " .$this->getRespirar();
        return $frase;
    }
}

$frase = new terrestres("terrestres", "", "", "respiran oxigeno del aire");
echo $frase->getFrase();

?>