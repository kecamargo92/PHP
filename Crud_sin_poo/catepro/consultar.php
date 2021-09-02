<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Categorias de productos</title>
</head>


<body>

  <div> <!-- de aqui para abajo es solo vista -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <a class="navbar-brand text-while" href="../../index.html">
        <img src="../../img/ibgi.png" height="40px" width="">
      </a>

      <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a href="../../index.html" class="nav-link">Inicio</a>
          </li>

          <li class="nav-item active">
            <a href="adicionar.php" class="nav-link btn btn-success">Registrar</a>
          </li>

        </ul>

        <span class="navbar-text mr-sm-2">
          Bienvenid(a)
        </span>

        <form class="form-inline" action="actualizar.php">
          <input class="form-control  mr-sm-2">
          <button class="btn btn-warning">Buscar</button>
        </form>

      </div>
    </nav>
    <br>
  </div>

  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
      </tr>
    </thead>

    <!-- de aqui para arriba es solo vista -->

    <?php
    include("../conexion.php"); //conexion con la base de datos

    if ($CONN) { //si se conecta...

      $sql = "SELECT * FROM categorias_productos"; //seleccione todo de la tabla

      $exec = mysqli_query($CONN, $sql); // verifique la conexion y ejecute el sql

      if ($exec) { //si se ejecuta

        while ($row = $exec->fetch_array()) { //crear un bucle array llamado row para los siguientes campos
          $id = $row['id_catepro'];
          $nombre = $row['descripcion_catepro'];
    ?>
          <tbody>
            <tr>
              <td><?php echo  $id; //los muestra en pantalla ?></td>
              <td><?php echo $nombre; //los muestra en pantalla ?></td>
              <td>
                <a href="actualizar.php?url=<?php echo $row['id_catepro'];?>" class="btn btn-primary">Actualizar</a> <!-- este botón ejecuta actualizar y por medio de "?url="  envia por el link el "id_catepro" del campo de la tabla seleccionado-->
              </td>
              <td>
                <a href="eliminar.php?url=<?php echo $row['id_catepro'];?>" class="btn btn-danger">Eliminar</a> <!-- este botón ejecuta eliminar y por medio de "?url="  envia por el link el "id_catepro" del campo de la tabla seleccionado-->
              </td>
            </tr>
          </tbody>

    <?php
        } //hay que cerrar el while
      } // hay que cerrar el if
    } // hay que cerrar el if de la conexion 
    ?>

  </table>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>