<?php
require "../conexion.php";
require "jugador.php";

$objConexion = Conectarse();
$objEquipo = new jugador();
$resultado = $objEquipo->ConsultarJugador();

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
  <h1>Listar jugadores</h1>
  <table class="table table-dark table-hover">
    <tr>
      <td>Codigo</td>
      <td>Nombre</td>
      <td>fecha de nac</td>
      <td>edad</td>
      <td>correo</td>
      <td>equipo</td>
      <td>Actualizar</td>
      <td>Eliminar</td>
    </tr>

    <?php
    while ($jugador = $resultado->fetch_object()) {
    ?>

      <tr>
        <td><?php echo  $jugador->id_jug ?></td>
        <td><?php echo  $jugador->nombre_jug  ?></td>
        <td><?php echo  $jugador->fechanac_jug ?></td>
        <td><?php echo  $jugador->edad_jug  ?></td>
        <td><?php echo  $jugador->correo_jug ?></td>
        <td><?php echo  $jugador->nombre_eq  ?></td>
        <td>
          <a style="text-decoration:none;" class="btn btn-primary" href="actualizar.php?yerba=<?php echo $jugador->id_jug;?>">Actualizar</a>
        </td>
        <td>
          <a style="text-decoration:none;" class="btn btn-danger" href="eliminar.php?yerba=<?php echo $jugador->id_jug;?>">Eliminar</a>
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