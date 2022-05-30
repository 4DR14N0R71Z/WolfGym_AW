<?php
//Se incluye el archivo de conexión, el cual incluye las constantes  para la conexión
include("connection.php");
//Aqui se reciben los datos del formulario #register
$username = $_POST['uname'];
$pass = $_POST['psw'];
$email = $_POST['email'];
//Esto es solo la consulta de insertar xd
$insertar = "INSERT INTO users(username, password, email)VALUES('$username','$pass','$email')";

//nodatosrepetidosjajxd
$verificar_usuario = mysqli_query($con, "SELECT * FROM users WHERE username ='$username'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script>
            alert("El usuario ya está registrado");
            window.history.go(-1);
         </script>';
    exit;
}
//Se verifica el correo jaja
$verificar_usuario = mysqli_query($con, "SELECT * FROM users WHERE email ='$email'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script>
    alert("El correo ya está registrado");
        window.history.go(-1);        
        </script>';
    exit;
}

//Aqui ya se ejecuta
$resultado = mysqli_query($con, $insertar);

if (!$resultado) {
    echo 'Intenta de nuevo compa';
} else {
    echo '<script>
        alert("Ha sido registrado exitosamente");
        window.location="index.html#equipo";
          </script>';
}
//Cierro la conexción

mysqli_close($con);
