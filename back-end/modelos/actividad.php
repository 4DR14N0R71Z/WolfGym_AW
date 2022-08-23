<?php
require_once "crud.php";
require_once "config_db.php";

class Actividad implements CRUD
{
    public $codigo;
    public $nombre;
    public $descripcion;
    public $fecha;
    public $inicio;
    public $termino;
    public $coach;
    public $status;
    private $conexion;

    public function crear()
    {
        //Establecemos la conexion 
        $this->conexion = new Config_db();
        //Obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos la inserción 
        $stmt = $conn->prepare("INSERT INTO ACTIVIDAD (Nombre, Descripcion, Fecha, Inicio, Termino, CodCoach,  Status) VALUES (:Nombre, :Descripcion, :Fecha, :Inicio, :Termino, :CodCoach, :Status)");
        $stmt->bindParam(':Nombre', $this->nombre);
        $stmt->bindParam(':Descripcion', $this->descripcion);
        $stmt->bindParam(':Fecha', $this->fecha);
        $stmt->bindParam(':Inicio', $this->inicio);
        $stmt->bindParam(':Termino', $this->termino);
        $stmt->bindParam(':CodCoach', $this->coach);
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
        $stmt = $conn->prepare("UPDATE ACTIVIDAD SET Nombre=:Nombre, Descripcion=:Descripcion, Fecha=:Fecha, Inicio=:Inicio, Termino=:Termino, CodCoach=:CodCoach, Status=:Status WHERE Codigo=:Codigo");
        $stmt->bindParam(':Codigo', $this->codigo);
        $stmt->bindParam(':Nombre', $this->nombre);
        $stmt->bindParam(':Descripcion', $this->descripcion);
        $stmt->bindParam(':Fecha', $this->fecha);
        $stmt->bindParam(':Inicio', $this->inicio);
        $stmt->bindParam(':Termino', $this->termino);
        $stmt->bindParam(':CodCoach', $this->coach);
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
        $stmt = $conn->prepare("DELETE FROM ACTIVIDAD WHERE Codigo=:Codigo");
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
        $stmt = $conn->prepare("SELECT ACTIVIDAD.*, COACH.Codigo as CodCoach, CONCAT(COACH.Nombre, ' ', COACH.ApellidoP) as Coach FROM ACTIVIDAD INNER JOIN COACH ON ACTIVIDAD.CodCoach=COACH.Codigo WHERE ACTIVIDAD.Codigo=:Codigo");
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
        $stmt = $conn->prepare("SELECT ACTIVIDAD.*, CONCAT(COACH.Nombre, ' ', COACH.ApellidoP) as Coach FROM ACTIVIDAD INNER JOIN COACH ON ACTIVIDAD.CodCoach=COACH.Codigo");
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
