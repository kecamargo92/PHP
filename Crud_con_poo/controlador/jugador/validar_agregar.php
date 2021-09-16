<?php
require "../conexion.php";
require "jugador.php";

$objEquipo = new jugador();

$objEquipo-> set ($_POST['id'],$_POST['nombre'],$_POST['fecha'],$_POST['edad'],$_POST['correo'],$_POST['equipo']);

$resultado = $objEquipo->AgregarJugador();

if ($resultado)
header("location:agregar.php");
else
echo "Error al agregar";
?>