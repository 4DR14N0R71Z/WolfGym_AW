<?php

//Se definen las constantes de conexión

function conectar()
{
    $user = "root";
    $pass = "";
    $server = "";
    $db = "log";
    $con = mysqli_connect($server, $user, $pass) or die("Error al conectar al servidor");
    mysqli_select_db($con, $db);

    return $con;
}
