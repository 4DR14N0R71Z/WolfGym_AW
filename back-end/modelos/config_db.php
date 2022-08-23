<?php

class Config_db
{
    private $servername = "sql308.epizy.com";
    private $username = "epiz_32391890";
    private $password = "pufphLGNMb1ZqY";
    private $conn;

    public function __construct()
    {
        try {
            //Conexión con MySQL
            $this->conn = new PDO("mysql:host=$this->servername;dbname=epiz_32391890_bd_gym", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function get_conn()
    {
        return $this->conn;
    }
}

//$conn = new Config_db();
