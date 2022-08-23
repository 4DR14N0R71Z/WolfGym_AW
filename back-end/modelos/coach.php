<?php
require_once "crud.php";
require_once "config_db.php";

class Coach implements CRUD
{
    public $codigo;
    public $nombre;
    public $apellidoP;
    public $apellidoM;
    public $direccion;
    public $ciudad;
    public $telefono;
    public $codPostal;
    public $imagen;
    public $status;
    private $conexion;

    public function crear()
    {
        //Establecemos la conexion 
        $this->conexion = new Config_db();
        //Obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos la inserción 
        $stmt = $conn->prepare("INSERT INTO COACH (Nombre, ApellidoP, ApellidoM, Direccion, Ciudad, Telefono, CodPostal, Imagen, Status) VALUES (:Nombre, :ApellidoP, :ApellidoM, :Direccion, :Ciudad, :Telefono, :CodPostal, :Imagen, :Status)");
        $stmt->bindParam(':Nombre', $this->nombre);
        $stmt->bindParam(':ApellidoP', $this->apellidoP);
        $stmt->bindParam(':ApellidoM', $this->apellidoM);
        $stmt->bindParam(':Direccion', $this->direccion);
        $stmt->bindParam(':Ciudad', $this->ciudad);
        $stmt->bindParam(':Telefono', $this->telefono);
        $stmt->bindParam(':CodPostal', $this->codPostal);
        $stmt->bindParam(':Imagen', $this->imagen);
        $stmt->bindParam(':Status', $this->status);

        //Ejecutar query
        if ($stmt->execute()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function actualizar()
    {
        //Establecemos la conexion 
        $this->conexion = new Config_db();
        //Obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos la inserción 
        $stmt = $conn->prepare("UPDATE COACH SET Nombre=:Nombre, ApellidoP=:ApellidoP, ApellidoM=:ApellidoM, Direccion=:Direccion, Ciudad=:Ciudad, Telefono=:Telefono, CodPostal=:CodPostal, Imagen=:Imagen, Status=:Status WHERE Codigo=:Codigo");
        $stmt->bindParam(':Codigo', $this->codigo);
        $stmt->bindParam(':Nombre', $this->nombre);
        $stmt->bindParam(':ApellidoP', $this->apellidoP);
        $stmt->bindParam(':ApellidoM', $this->apellidoM);
        $stmt->bindParam(':Direccion', $this->direccion);
        $stmt->bindParam(':Ciudad', $this->ciudad);
        $stmt->bindParam(':Telefono', $this->telefono);
        $stmt->bindParam(':CodPostal', $this->codPostal);
        $stmt->bindParam(':Imagen', $this->imagen);
        $stmt->bindParam(':Status', $this->status);

        //Ejecutar query
        if ($stmt->execute()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function borrar()
    {
        //Establecemos la conexion 
        $this->conexion = new Config_db();
        //Obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos la inserción 
        $stmt = $conn->prepare("DELETE FROM COACH WHERE Codigo=:Codigo");
        $stmt->bindParam(':Codigo', $this->codigo);

        //Ejecutar query
        if ($stmt->execute()) {
            return 1;
        } else {
            return 0;
        }
    }

    //son consultas, no alteran los registros de la tabla
    //obtiene un solo registro unico por pk
    public function obtener_por_id()
    {
        //Establecemos al conexion
        $this->conexion = new Config_db();
        //obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos el query de consulta
        $stmt = $conn->prepare("SELECT * FROM COACH WHERE Codigo=:Codigo");
        $stmt->bindParam(':Codigo', $this->codigo);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        //Ejecutar query
        return $stmt->fetchAll();
    }

    //obtiene todos los registros
    public function obtener_todo()
    {
        //Establecemos al conexion
        $this->conexion = new Config_db();
        //obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos el query de consulta
        $stmt = $conn->prepare("SELECT * FROM COACH");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        //Ejecutar query
        return $stmt->fetchAll();
    }

    //obtiene registros por campo
    public function obtener_por_campo()
    {
    }
}
