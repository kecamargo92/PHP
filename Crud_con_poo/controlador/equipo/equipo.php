<?php

class equipo
{

    //atributos de la tabla
    private $id_eq;
    private $nombre_eq;
    private $direccion_eq;
    private $telefono_eq;
    private $telefono2_eq;
    private $correo_eq;
    private $logo_eq;


    //SET
    public function set($id, $nombre, $direccion, $telefono, $celular, $correo, $logo) //nuevo nombre de las variables
    {
        //campo del formulario se le asigna un variable SET
        $this->id = $id;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->celular = $celular;
        $this->correo = $correo;
        $this->logo = $logo;
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
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function getLogo()
    {
        return $this->logo;
    }


    public function AgregarEquipo()
    {
        $this->conexion = conectarse(); //abrimos la conexion con la base de datos

        //En el sql primero se escriben los campos de la tabla exactamente iguales
        $sql = "INSERT INTO equipo (nombre_eq, direccion_eq, telefono_eq, telefono2_eq, correo_eq, logo_eq)
        VALUES ('$this->nombre' , '$this->direccion' , '$this->telefono' , '$this->celular' , '$this->correo' , '$this->logo')";
        // los VALUES son las variables que tomamos de los SET 

        $resultado = $this->conexion->query($sql); // se crea una variable '$resultado' donde hace una conexion con la base de datos para que pueda ejecutar el sql
        $this->conexion->close(); //cerramos la conexion con la base de datos
        return $resultado; //muestra la operacion en el sql
    }

    public function ConsultarEquipo()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM equipo"; //sentencia para mostrar todo de una tabla
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function ActualizarEquipo()
    {
        $this->conexion = Conectarse();
        $sql = "UPDATE equipo set nombre_eq = '$this->nombre', direccion_eq = '$this->direccion', telefono_eq = '$this->telefono', telefono2_eq ='$this->celular', correo_eq = '$this->correo', logo_eq = '$this->logo' WHERE id_eq = '$this->id'";
        //utilizo las variables SET para hacer la actualización desde un formulario externo
        $resultado = $this->conexion->query($sql);
        $this->conexion->close();
        return $resultado;
    }

    public function EliminarEquipo() //este metodo es para eliminar por formulario 
    {
        $this->conexion = conectarse();
        //$id = $_GET['id'];
        $sql = "DELETE FROM equipo WHERE id_eq = '$this->id'";
        $resultado = $this->conexion->query($sql);
        $this->conexion->close();
        return $resultado;
    }

    public function ConsultarEquipoID() // este metodo es para consultar por el id y el REQUEST sea por el link "yerba"
    {
        $this->Conexion = Conectarse();
        $sql = "select * from equipo where id_eq='$_REQUEST[yerba]'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function EliminarEquipoID()  // este metodo es para eliminar por el id y el REQUEST sea por el link "yerba"
    {
        $this->conexion = conectarse();
        $sql = "DELETE FROM equipo WHERE id_eq='$_REQUEST[yerba]'"; //request es para traer el id por el link
        $resultado = $this->conexion->query($sql);
        $this->conexion->close();
        return $resultado;
    }
}