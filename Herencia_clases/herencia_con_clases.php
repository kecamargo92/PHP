<?php
//clase persona
class persona
{
    //atributos libres, sin datos
    public $nombre;
    public $apellido;

    //metodos
    public function __construct ($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        //el constructor remplaza los set de los atributos
    }

    public function getNombre ()
    {
        return $this->nombre; //retorna el dato de la variable 'nombre'
    }

    public function getApellido()
    {
        return $this->apellido;//retorna el dato de la variable 'apellido'
    }

    //este metodo imprime el dato de 'nombre' y 'apellido' de la misma clase
    public function imprimeNombre ()
    {
        echo 'mi nombre es ' .$this->getNombre(). ' ' .$this->getApellido();
    }
}

class alumno extends persona //clase alumno donde hereda los atributos y metodos de la clase 'persona' por medio de 'extends'
{
    public $matricula='123456789'; //atributo con un dato por defecto

    //---metodos---- incluye los atributos de la clase principal 'persona'
    public function __construct ($nombre, $apellido, $matricula)
    {
        parent:: __construct ($nombre, $apellido); //atributos de la clase 'persona'
        // $this->matricula = $matricula; //atributo set de la clase 'alumno' pero como ya se tiene los datos de la variable '1234567890', no es necesario incluirle otros datos
    }

    public function getMatricula ()
    {
        return $this->matricula; //metodo que retorna la variable 'matricula' 
    }

    public function DatosAlumnos () //metodo que usa otro metodo 'imprimeNombre' de la clase principal e imprime el atributo 'matricula'
    {
        $this->imprimeNombre(); //proviene de la clase principal
        echo ' mi m4tr1cul4 es ' .$this->getMatricula();  //impresion del atributo matricula
    }
}

//como 'alumno' herede de la clase 'persona' podemos usar sus atributos. Es por esto qué al crear una clase llamada 'new alumno' podemos añadir los atributos de 'nombre' y 'apellido'
$objAlumno = new alumno ("Kevin", "Camargo",""); //se colocan los datos del atributo que no tiene datos por defecto

// la variable 'objAlumno' llama al metodo 'DatosAlumnos' para que nos muestre en pantalla el metodo 'imprimeNombre' + el 'echo' 
$objAlumno->DatosAlumnos(); 


/*
En resumen: una herencia se usa para usar metodos y atributos de otra clase totalmente distinta
Autor: Kevin Camargo
Fecha: 20/08/21
*/
?>