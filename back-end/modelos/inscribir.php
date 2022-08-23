<?php
require_once "crud.php";
require_once "config_db.php";

class Inscribir implements CRUD
{
    public $cliente;
    public $actividad;
    private $conexion;

    public function crear()
    {
        //Establecemos la conexion 
        $this->conexion = new Config_db();
        //Obtenemos el conector
        $conn = $this->conexion->get_conn();
        //Preparamos la inserción 
        $stmt = $conn->prepare("INSERT INTO INSCRIBIR VALUES (:CodCliente, :CodActividad)");
        $stmt->bindParam(':CodCliente', $this->cliente);
        $stmt->bindParam(':CodActividad', $this->actividad);

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
        $stmt = $conn->prepare("UPDATE INSCRIBIR SET CodCliente=:CodCliente, CodActividad=:CodActividad ");
        $stmt->bindParam(':CodCliente', $this->cliente);
        $stmt->bindParam(':CodActividad', $this->actividad);

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
        $stmt = $conn->prepare("DELETE FROM INSCRIBIR WHERE CodCliente=:CodCliente AND CodActividad=:CodActividad");
        $stmt->bindParam(':CodCliente', $this->cliente);
        $stmt->bindParam(':CodActividad', $this->actividad);

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
        $stmt = $conn->prepare("SELECT INSCRIBIR.*, CLIENTE.Codigo as ClienteCod, CONCAT(CLIENTE.Nombre, ' ', CLIENTE.ApellidoP) as Cliente, ACTIVIDAD.Codigo as ActividadCod, ACTIVIDAD.Nombre as Actividad from INSCRIBIR INNER JOIN CLIENTE ON INSCRIBIR.CodCliente=CLIENTE.Codigo INNER JOIN ACTIVIDAD ON INSCRIBIR.CodActividad=ACTIVIDAD.Codigo  WHERE CodCliente=:CodCliente AND CodActividad=:CodActividad");
        $stmt->bindParam(':CodCliente', $this->cliente);
        $stmt->bindParam(':CodActividad', $this->actividad);
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
        $stmt = $conn->prepare("SELECT INSCRIBIR.*, CLIENTE.Codigo as ClienteCod, CONCAT(CLIENTE.Nombre, ' ', CLIENTE.ApellidoP) as Cliente, ACTIVIDAD.Codigo as ActividadCod, ACTIVIDAD.Nombre as Actividad from INSCRIBIR INNER JOIN CLIENTE ON INSCRIBIR.CodCliente=CLIENTE.Codigo INNER JOIN ACTIVIDAD ON INSCRIBIR.CodActividad=ACTIVIDAD.Codigo");
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
