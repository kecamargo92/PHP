<?php

class animal
{
    public $clase;
    public $cnace;
    public $calimenta;
    public $cvive;

    public function __construct($clase, $nacer, $comer, $respirar)
    {
        $this->clase = $clase;
        $this->nacer = $nacer;
        $this->comer = $comer;
        $this->respirar = $respirar;
    }

    public function getClase()
    {
        return $this->clase;
    }

    public function getNacer()
    {
        return $this->nacer;
    }

    public function getComer()
    {
        return $this->comer;
    }

    public function getRespirar()
    {
        return $this->respirar;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Reino animal</title>
</head>


<body>
    <h1 class="fst-italic">Reino animal</h1>
    <a class="btn btn-primary" href="oviparos.php">OVIPAROS</a>
    <a class="btn btn-primary" href="viviparos.php">VIVIPAROS</a>
    <a class="btn btn-warning" href="herbivoros.php">HERBIVOROS</a>
    <a class="btn btn-warning" href="carnivoros.php">CARNIVOROS</a>
    <a class="btn btn-warning" href="omnivoros.php">OMNIVOROS</a>
    <a class="btn btn-danger" href="acuaticos.php">ACUATICOS</a>
    <a class="btn btn-danger" href="terrestres.php">TERRESTRES</a>
    <a>--></a>
    <a class="btn btn-success" href="reino_animal.php">Limpiar</a>
    <br><br>
    <h3 class="font-monospace">Mensaje:</h3>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>