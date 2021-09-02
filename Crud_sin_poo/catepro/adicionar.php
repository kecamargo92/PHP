<?php

if (isset($_GET['url'])) { //permite controlar la sesion del localhost

  include("../conexion.php"); //conexion de la base de datos

  $descripcion = $_POST['descripcion']; //variable nueva y campo del formulario

  $sql = "INSERT INTO categorias_productos (descripcion_catepro) VALUES ('$descripcion')"; //el values es la nueva variable tomada del formulario

  $verf = mysqli_query($CONN, $sql); //variable que verifica que la conexion y el sql se ejecutó

  if ($verf) { //si se ejecutó redirecciona a adicionar.php
    header("location:adicionar.php");
  } else { //si no, aparece una ventana emergente diciendo error
    echo "<script type='text/javascript'>window.history.go(-1); confirm('Error en el registro');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Categorias de productos</title>
</head>

<body>

  <h1>Registrar catepro</h1>
  <form action="adicionar.php?url" method="POST"> <!-- el formulario ejecuta el action y POST captura los datos-->
    <input type="text" name="descripcion" required /> <!-- aquí esta el nombre del campo del formulario -->
    <input type="submit"/> <!-- enviar -->
    <a href="consultar.php" class="btn btn-danger">volver</a> <!-- boton de volver despues del registro -->
  </form>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>