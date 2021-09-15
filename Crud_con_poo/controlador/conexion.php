<?php

function conectarse()

{
    $conexion=new mysqli("localhost", "root", "", "campeonato");

    if ($conexion->connect_errno)
    echo "Problemas en la conexion". $conexion->connect_error;
    else
    return $conexion;
}

?>