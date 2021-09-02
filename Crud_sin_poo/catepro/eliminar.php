<?php

  include("../conexion.php"); //conexion con base de datos
  
    $sql = "DELETE FROM categorias_productos WHERE id_catepro = '$_REQUEST[url]'"; // el request toma la variable que viaja por el link
  
    $verf = mysqli_query($CONN, $sql); //variable que verifica la conexion y ejecuta el sql
  
    if ($verf)  //si es así, redirecciona a consultar
    {
      header("location:consultar.php");
    }
    else // si no, arroja un mensaje de error
    {
      echo ("error al eliminar");
    } 
?> 

<!-- FORMULARIO PARA PROBARLO SIN CONSULTAR.PHP PERO HAY QUE CAMBIAR EL REQUEST POR POST Y EL NOMBRE DEL CAMPO DEL FORMULARIO
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>

<body>
 
    <h1>Eliminar catepro</h1>
    <form action="eliminar.php?url" method="POST">
        <input type="number" name="id" required />
        <input type="submit" />
    </form>

    
</body>
</html>
-->