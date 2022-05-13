<?php

//Se definen las constantes de conexión

function conectar()
{
    $user = "sql3491433";
    $pass = "BfD4H1eHTj";
    $server = "sql3.freesqldatabase.com";
    $db = "sql3491433";
    $con = mysqli_connect($server, $user, $pass) or die("Error al conectar al servidor");
    mysqli_select_db($con, $db);

    return $con;
} gfgdf
