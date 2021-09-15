<?php
require "../conexion.php";
require "equipo.php";

$objConexion = Conectarse();
$objEquipo = new equipo();
$resultado = $objEquipo->ConsultarEquipo();

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Listar</title>
</head>

<body>
  <h1>Listar equipos</h1>
  <table class="table table-dark table-hover">
    <tr>
      <td>Codigo</td>
      <td>Nombre</td>
      <td>Direccion</td>
      <td>Telefono</td>
      <td>Celular</td>
      <td>Correo</td>
      <td>Logo</td>
      <td>Actualizar</td>
      <td>Eliminar</td>
    </tr>

    <?php
    while ($equipo = $resultado->fetch_array()) {
      $id = $equipo['id_eq'];
      $nombre = $equipo['nombre_eq'];
      $direccion = $equipo['direccion_eq'];
      $telefono = $equipo['telefono_eq'];
      $celular = $equipo['telefono2_eq'];
      $correo = $equipo['correo_eq'];
      $logo = $equipo['logo_eq'];
    ?>

      <tr>
        <td><?php echo  $id ?></td>
        <td><?php echo  $nombre  ?></td>
        <td><?php echo  $direccion  ?></td>
        <td><?php echo  $telefono  ?></td>
        <td><?php echo  $celular ?></td>
        <td><?php echo  $correo  ?></td>
        <td><?php echo  $logo  ?></td>
        <td>
          <a style="text-decoration:none;" class="btn btn-primary" href="actualizar.php?yerba=<?php echo $equipo['id_eq'];?>">Actualizar</a>
        </td>
        <td>
          <a style="text-decoration:none;" class="btn btn-danger" href="eliminar.php?yerba=<?php echo $equipo['id_eq'];?>">Eliminar</a>
        </td>
      </tr>

    <?php
    }
    ?>
  </table>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>