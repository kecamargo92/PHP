<?php

require "../conexion.php";
require "equipo.php";

$objConexion = Conectarse();

$objEquipo = new equipo();
$resul = $objEquipo->ConsultarEquipoID();
$resultado = $resul->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Equipos</title>
</head>

<body>

    <h1>Actualizar Equipo</h1>
    <div class="form-row">
        <form action="validar_actualizar.php?yerba" method="POST">
            <input type="text" name="id" value="<?php echo $resultado['id_eq'] ?>" placeholder="id" class="form-control d-none" required />
            <input type="text" name="nombre" value="<?php echo $resultado['nombre_eq'] ?>" placeholder="nombre" class="form-control"required />
            <input type="text" name="direccion" value="<?php echo $resultado['direccion_eq'] ?>" placeholder="direccion" class="form-control"required />
            <input type="text" name="telefono" value="<?php echo $resultado['telefono_eq'] ?>" placeholder="telefono" class="form-control"required />
            <input type="text" name="celular" value="<?php echo $resultado['telefono2_eq'] ?>" placeholder="celular" class="form-control"required />
            <input type="text" name="correo" value="<?php echo $resultado['correo_eq'] ?>" placeholder="correo" class="form-control"required />
            <input type="text" name="logo" value="<?php echo $resultado['logo_eq'] ?>" placeholder="logo" class="form-control"required />
            <input type="submit" />
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>