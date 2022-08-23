<?php
require_once "crud.php";
require_once "config_db.php";

class Login implements CRUD
{
    public $id;
    public $email;
    public $pass;
    public $tipo;
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
        $stmt = $conn->prepare("INSERT INTO LOGIN (Email, Pass, Tipo, Imagen, Status) VALUES (:Email, :Pass, :Tipo, :Imagen, :Status)");
        $stmt->bindParam(':Email', $this->email);
        $stmt->bindParam(':Pass', $this->pass);
        $stmt->bindParam(':Tipo', $this->tipo);
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
        $stmt = $conn->prepare("UPDATE LOGIN SET Email=:Email, Pass=:Pass, Tipo=:Tipo, Imagen=:Imagen, Status=:Status where Id=:Id") ;
        $stmt->bindParam(':Id', $this->id);
        $stmt->bindParam(':Email', $this->email);
        $stmt->bindParam(':Pass', $this->pass);
        $stmt->bindParam(':Tipo', $this->tipo);
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
        $stmt = $conn->prepare("UPDATE LOGIN set Status='Inactivo' where Id=:Id");
        $stmt->bindParam(':Id', $this->id);

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
        $stmt = $conn->prepare("SELECT * FROM LOGIN where Id=:Id");
        $stmt->bindParam(':Id', $this->id);
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
        $stmt = $conn->prepare("SELECT * FROM LOGIN");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        //Ejecutar query
        return $stmt->fetchAll();
    }
    public function acceso()
    {
        //Establecemos al conexion
        $this->conexion = new Config_db();
        //obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos el query de consulta
        $stmt = $conn->prepare("SELECT * FROM LOGIN where Email=:Email and Pass=:Pass and Status='Activo'");
        $stmt->bindParam(':Email', $this->email);
        $stmt->bindParam(':Pass', $this->pass);
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
