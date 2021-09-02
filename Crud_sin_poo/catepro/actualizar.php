<?php

  include("../conexion.php"); //conexion a la base de datos

    $sql="select * from categorias_productos where id_catepro = '$_REQUEST[url]'"; // el request toma la variable que viaja por el link
    $resultado = $CONN->query($sql); // variable que verifica la conexion y ejecuta el sql
    $catepro = $resultado->fetch_array(); // a la variable anterior se le envia un array para que nos muestre los datos del select * from que se hizo

    if ($catepro) //si se ejecuta el array
    {
      //no pasa nada
    }

    else //pero si no, actualiza los campos
    {
      $sql = "UPDATE categorias_productos set descripcion_catepro = '$_REQUEST[nombre]' WHERE id_catepro = '$_REQUEST[id]'"; //estos campos request son tomados de los campos del formulario
      $resul = $CONN->query($sql); //variable para que verifique la conexion y ejecute el sql
      header("Location:consultar.php"); //si todo sale bien redirecciona a consultar.php
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Actualizar</title>
</head>

<body>
  <h1>Actualizar catepro</h1>
  <form action="actualizar.php?url" method="POST">
    <input type="text" name="id" value="<?php echo $catepro['id_catepro']?>" required /> <!-- catepro es el nombre de la variable del array y lo otro es el campo de la tabla exactamente igual-->
    <input type="text" name="nombre" value="<?php echo $catepro['descripcion_catepro']?>" required /> <!-- catepro es el nombre de la variable del array y lo otro es el campo de la tabla exactamente igual-->
    <input type="submit"/>
  </form>
</body>

</html>