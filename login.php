<?php
$uname = $_POST['email'];
$pass = $_POST['psw'];

session_start();
$_SESSION['uname'] = $uname;

include('connection.php');
$consulta = "SELECT*FROM users where email='$uname' and password='$pass'";
$resultado = mysqli_query($con, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    echo '<script>
    window.location="home.html";
 </script>';
} else {
?>
    <h1>Error de autenticación</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($con);
