<?php
require 'reino_animal.php';

class acuaticos extends animal 
{
    public function getFrase() 
    {
        $frase = "Animal de clase: " .$this->getClase(). ", " .$this->getRespirar();
        return $frase;
    }
}

$frase = new acuaticos ("acuaticos", "", "", "respiran oxigeno del agua");
echo $frase->getFrase();

?>