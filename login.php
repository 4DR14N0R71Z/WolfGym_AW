<?php
$uname = $_POST['uname'];
$pass = $_POST['psw'];

session_start();
$_SESSION['uname'] = $uname;

include('connection.php');
$consulta = "SELECT*FROM log where usuario='" . $uname . "' and pass='" . $pass . "'";
$resultado = mysqli_query($con, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) {

    header("Location:home.php");
} else {
?>
    <h1>Error de autenticación</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($con);
