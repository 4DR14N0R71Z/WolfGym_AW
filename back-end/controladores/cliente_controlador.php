<?php
require_once "../modelos/cliente.php";

print_r($_POST);
echo "<br>";
print_r($_FILES);

if (isset($_REQUEST['opcion'])) {

    $opcion = $_REQUEST['opcion'];
    switch ($opcion) {
        case 1: //crear
            if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellidoP']) && isset($_REQUEST['apellidoM']) && isset($_REQUEST['direccion']) && isset($_REQUEST['ciudad']) && isset($_REQUEST['telefono']) && isset($_REQUEST['codPostal']) && isset($_FILES['imagen']) && isset($_REQUEST['status'])) {

                include_once "cliente_file_upload.php";

                //Crear objeto de la clase usuario
                $cliente = new Cliente();

                //Descargar datos enviados por el formulario 
                $cliente->nombre = $_REQUEST['nombre'];
                $cliente->apellidoP = $_REQUEST['apellidoP'];
                $cliente->apellidoM = $_REQUEST['apellidoM'];
                $cliente->direccion = $_REQUEST['direccion'];
                $cliente->ciudad = $_REQUEST['ciudad'];
                $cliente->telefono = $_REQUEST['telefono'];
                $cliente->codPostal = $_REQUEST['codPostal'];
                $cliente->imagen = $_FILES['imagen']['name'];
                $cliente->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $cliente->crear();
                $mensaje = "";
                if ($resultado == 1) {
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    echo $mensaje = "Inserción exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Cliente/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la inserción";
                }
            } else {
                echo  $mensaje = "faltan datos por enviar";
            }
            break;
        case 2: //actualizar

            if (isset($_REQUEST['codigo']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellidoP']) && isset($_REQUEST['apellidoM']) && isset($_REQUEST['direccion']) && isset($_REQUEST['ciudad']) && isset($_REQUEST['telefono']) && isset($_REQUEST['codPostal']) && isset($_FILES['imagen']) && isset($_REQUEST['status'])) {

                include_once "cliente_file_upload.php";

                //Crear objeto de la clase usuario
                $cliente = new Cliente();

                //Descargar datos enviados por el formulario 
                $cliente->codigo = $_REQUEST['codigo'];
                $cliente->nombre = $_REQUEST['nombre'];
                $cliente->apellidoP = $_REQUEST['apellidoP'];
                $cliente->apellidoM = $_REQUEST['apellidoM'];
                $cliente->direccion = $_REQUEST['direccion'];
                $cliente->ciudad = $_REQUEST['ciudad'];
                $cliente->telefono = $_REQUEST['telefono'];
                $cliente->codPostal = $_REQUEST['codPostal'];
                if ($_FILES['imagen']['error']==0) {
                    $cliente->imagen = $_FILES['imagen']['name'];
                } else {
                    $cliente->imagen = $_REQUEST['imagen_actual'];
                }
                $cliente->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $cliente->actualizar();
                $mensaje = "";
                if ($resultado == 1) {
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                    } else {
                        if (unlink("/WolfGym/back-end/imagenes/clientes/" . $_REQUEST['imagen_actual'])) {
                            echo "La imagen ha sido eliminada";
                        }
                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                            header('location: /WolfGym/front-end/vistas/Cliente/index.php?Error=' . $mensaje);
                            exit();
                        }
                    }
                    echo $mensaje = "actualizacón exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Cliente/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la actualización";
                }
            } else {
               echo $mensaje = "faltan datos por enviar";
            }

            break;
        case 3: //borrado logico

            if (isset($_REQUEST['codigo'])) {

                //Crear objeto de la clase usuario
                $cliente = new Cliente();

                //Descargar datos enviados por el formulario 
                $cliente->codigo = $_REQUEST['codigo'];
               
                //Ejecutar la función 
                $resultado = $cliente->borrar();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "Borrado exitoso";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Cliente/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible borrar";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }

            break;
    }
} else {
    echo "falta la variable opción";
}
