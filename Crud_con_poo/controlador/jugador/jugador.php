<?php

class jugador
{

    //atributos de la tabla
    private $id_jug;
    private $nombre_jug;
    private $fechanac_jug;
    private $edad_jug;
    private $correo_jug;
    private $equipo_id_eq;

    //SET
    public function set($id, $nombre, $fecha, $edad, $correo, $equipo) //nuevo nombre de las variables
    {
        //campo del formulario se le asigna un variable SET
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->equipo = $equipo;
    }


    // GET
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function getEquipo()
    {
        return $this->equipo;
    }


    public function AgregarJugador()
    {
        $this->conexion = conectarse(); //abrimos la conexion con la base de datos

        //En el sql primero se escriben los campos de la tabla exactamente iguales
        $sql = "INSERT INTO jugador (id_jug, nombre_jug, fechanac_jug, edad_jug, correo_jug, equipo_id_eq)
        VALUES ('$this->id', '$this->nombre' , '$this->fecha' , '$this->edad' , '$this->correo' , '$this->equipo')";
        // los VALUES son las variables que tomamos de los SET 

        $resultado = $this->conexion->query($sql); // se crea una variable '$resultado' donde hace una conexion con la base de datos para que pueda ejecutar el sql
        $this->conexion->close(); //cerramos la conexion con la base de datos
        return $resultado; //muestra la operacion en el sql
    }

    public function ConsultarJugador()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT j.id_jug, j.nombre_jug, j.fechanac_jug, j.edad_jug, j.correo_jug, e.nombre_eq FROM jugador j, equipo e WHERE (j.equipo_id_eq = e.id_eq)"; //sentencia para mostrar combinadas 2 tablas
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function ActualizarJugador()
    {
        $this->conexion = Conectarse();
        $sql = "UPDATE jugador set nombre_jug = '$this->nombre', fechanac_jug = '$this->fecha', edad_jug = '$this->edad', correo_jug ='$this->correo', equipo_id_eq = '$this->equipo' WHERE id_jug = '$this->id'";
        //utilizo las variables SET para hacer la actualización desde un formulario externo
        $resultado = $this->conexion->query($sql);
        $this->conexion->close();
        return $resultado;
    }

    public function EliminarJugador() //este metodo es para eliminar por formulario 
    {
        $this->conexion = conectarse();
        $sql = "DELETE FROM jugador WHERE id_jug = '$this->id'";
        $resultado = $this->conexion->query($sql);
        $this->conexion->close();
        return $resultado;
    }

    public function ConsultarJugadorID() // este metodo es para consultar por el id y el REQUEST sea por el link "yerba"
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM jugador WHERE id_jug='$_REQUEST[yerba]'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function EliminarJugadorID()  // este metodo es para eliminar por el id y el REQUEST sea por el link "yerba"
    {
        $this->conexion = conectarse();
        $sql = "DELETE FROM jugador WHERE id_jug='$_REQUEST[yerba]'"; //request es para traer el id por el link
        $resultado = $this->conexion->query($sql);
        $this->conexion->close();
        return $resultado;
    }
}