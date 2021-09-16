<?php
require "../conexion.php";
require "equipo.php";

$objEquipo = new equipo();


$objEquipo-> set ($_POST['id'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['celular'],$_POST['correo'],$_POST['logo']);

$resultado = $objEquipo->EliminarEquipo();

if ($resultado)
{
    echo "Exito al eliminar";
}
else
{
    echo "Error al eliminar";
}
?>