<?php
require_once "../modelos/login.php";

print_r($_POST);
echo "<br>";
print_r($_FILES);

if (isset($_REQUEST['opcion'])) {

    $opcion = $_REQUEST['opcion'];
    switch ($opcion) {
        case 1: //crear
            if (isset($_REQUEST['email']) && isset($_REQUEST['pass']) && isset($_REQUEST['tipo']) && isset($_FILES['imagen']) && isset($_REQUEST['status'])) {

                include_once "login_file_upload.php";

                //Crear objeto de la clase usuario
                $login = new Login();

                //Descargar datos enviados por el formulario 
                $login->email = $_REQUEST['email'];
                $login->pass = $_REQUEST['pass'];
                $login->tipo = $_REQUEST['tipo'];
                $login->imagen = $_FILES['imagen']['name'];
                $login->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $login->crear();
                $mensaje = "";
                if ($resultado == 1) {
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Tu archivo no ha sido subido.";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                            echo "El archivo " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " se ha subido correctamente.";
                        } else {
                            echo "Ha ocurrido un error subiendo tu archivo.";
                        }
                    }
                    echo $mensaje = "Inserción exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Usuario/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la inserción";
                }
            } else {
                echo  $mensaje = "faltan datos por enviar";
            }
            break;
        case 2: //actualizar

            if (isset($_REQUEST['email']) && isset($_REQUEST['pass']) && isset($_REQUEST['tipo']) && isset($_FILES['imagen']) && isset($_REQUEST['status'])) {

                include_once "login_file_upload.php";

                //Crear objeto de la clase usuario
                $login = new Login();

                //Descargar datos enviados por el formulario 
                $login->id = $_REQUEST['id'];
                $login->email = $_REQUEST['email'];
                $login->pass = $_REQUEST['pass'];
                $login->tipo = $_REQUEST['tipo'];
                if ($_FILES['imagen']['error'] == 0) {
                    $login->imagen = $_FILES['imagen']['name'];
                } else {
                    $login->imagen = $_REQUEST['imagen_actual'];
                }
                $login->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $login->actualizar();
                $mensaje = "";
                if ($resultado == 1) {
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Tu archivo no ha sido subido.";
                        // if everything is ok, try to upload file
                    } else {
                        if (unlink("/WolfGym/back-end/imagenes/login/" . $_REQUEST['imagen_actual'])) {
                            echo "La imagen ha sido eliminada";
                        }
                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                            echo "El archivo " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " se ha subido correctamente.";
                        } else {
                            echo "Ha ocurrido un error subiendo tu archivo.";
                            header('location: /WolfGym/front-end/vistas/Usuario/index.php?Error=' . $mensaje);
                            exit();
                        }
                    }
                    echo $mensaje = "actualizacón exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Usuario/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la actualización";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }

            break;
        case 3: //borrado logico

            if (isset($_REQUEST['id'])) {

                //Crear objeto de la clase usuario
                $login = new Login();

                //Descargar datos enviados por el formulario 
                $login->id = $_REQUEST['id'];

                //Ejecutar la función 
                $resultado = $login->borrar();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "Borrado exitoso";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Usuario/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible borrar";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }

            break;

        case 4: //Login

            if (isset($_REQUEST['email']) && isset($_REQUEST['pass'])) {
                $login = new Login();

                $login->email = $_REQUEST['email'];
                $login->pass = $_REQUEST['pass'];

                $resultado = $login->acceso();

                $mensaje = "";

                if (empty($resultado)) {
                    $mensaje = "Correo y/o contraseña inválidas.";
                    header('Location: /WolfGym/front-end/vistas/Login/Index.php' . $mensaje);
                    exit();
                } else {
                    session_start();
                    $log = $resultado[0];
                    $_SESSION['id'] = $log->Id;
                    $_SESSION['email'] = $log->Email;
                    $_SESSION['pass'] = $log->Pass;
                    $_SESSION['tipo'] = $log->Tipo;
                    $_SESSION['imagen'] = $log->Imagen;
                    $_SESSION['status'] = $log->Status;
                    header('Location: /WolfGym/front-end/dashboard/index.php' . $mensaje);
                    exit();
                }
            } else {
                $mensaje = "Faltan datos por enviar";
            }
            break;

        case 5: //Logout

            session_start();

            session_unset();

            session_destroy();

            $mensaje = "Sesión terminada";
            header('Location: /WolfGym/index.php?mensaje=' . $mensaje);
            exit();
            break;
    }
} else {
    echo "falta la variable opción";
}
