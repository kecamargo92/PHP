<?php

require "../conexion.php";
require "jugador.php";

$objConexion = Conectarse();

$objEquipo = new jugador();
$resul = $objEquipo->ConsultarJugadorID();
$resultado = $resul->fetch_array();

$sql = "select id_eq, nombre_eq from equipo";
$resultadoEquipo = $objConexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Jugador</title>
</head>

<body>

    <h1>Actualizar jugador</h1>
    <div class="form-row">
        <form action="validar_actualizar.php" method="POST">
            <input type="number" name="id" value="<?php echo $resultado['id_jug'] ?>" placeholder="id" class="form-control d-none" required />
            <input type="text" name="nombre" value="<?php echo $resultado['nombre_jug'] ?>" placeholder="nombre" class="form-control"required />
            <input type="date" name="fecha" value="<?php echo $resultado['fechanac_jug'] ?>" placeholder="fecha de nac" class="form-control"required />
            <input type="number" name="edad" value="<?php echo $resultado['edad_jug'] ?>" placeholder="edad" class="form-control"required />
            <input type="text" name="correo" value="<?php echo $resultado['correo_jug'] ?>" placeholder="correo" class="form-control"required />
            <select name="equipo" value="<?php echo $resultado['equipo_id_eq'] ?>">
                <option>--Equipo--</option>
                <?php
              while ($opciones = $resultadoEquipo->fetch_object())
              {
               ?>
               <option value="<?php echo $opciones->id_eq?>"><?php echo $opciones->nombre_eq?></option>
               <?php  
              }		  
             ?>
            </select>
            <input type="submit" />
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>