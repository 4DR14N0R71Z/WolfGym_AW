<?php
require_once "../modelos/coach.php";
if (isset($_REQUEST['opcion'])) {

    $opcion = $_REQUEST['opcion'];
    switch ($opcion) {
        case 1: //crear
            if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellidoP']) && isset($_REQUEST['apellidoM']) && isset($_REQUEST['direccion']) && isset($_REQUEST['ciudad']) && isset($_REQUEST['telefono']) && isset($_REQUEST['codPostal']) && isset($_FILES['imagen']) && isset($_REQUEST['status'])) {

                include_once "coach_file_upload.php";

                //Crear objeto de la clase usuario
                $coach = new Coach();

                //Descargar datos enviados por el formulario 
                $coach->nombre = $_REQUEST['nombre'];
                $coach->apellidoP = $_REQUEST['apellidoP'];
                $coach->apellidoM = $_REQUEST['apellidoM'];
                $coach->direccion = $_REQUEST['direccion'];
                $coach->ciudad = $_REQUEST['ciudad'];
                $coach->telefono = $_REQUEST['telefono'];
                $coach->codPostal = $_REQUEST['codPostal'];
                $coach->imagen = $_FILES['imagen']['name'];
                $coach->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $coach->crear();
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
                    header('location: /WolfGym/front-end/vistas/Coach/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la inserción";
                }
            } else {
                $mensaje = "faltan datos por enviar";
            }
            break;
        case 2: //actualizar

            if (isset($_REQUEST['codigo']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellidoP']) && isset($_REQUEST['apellidoM']) && isset($_REQUEST['direccion']) && isset($_REQUEST['ciudad']) && isset($_REQUEST['telefono']) && isset($_REQUEST['codPostal']) && isset($_FILES['imagen']) && isset($_REQUEST['status'])) {

                include_once "coach_file_upload.php";

                //Crear objeto de la clase usuario
                $coach = new Coach();

                //Descargar datos enviados por el formulario 
                $coach->codigo = $_REQUEST['codigo'];
                $coach->nombre = $_REQUEST['nombre'];
                $coach->apellidoP = $_REQUEST['apellidoP'];
                $coach->apellidoM = $_REQUEST['apellidoM'];
                $coach->direccion = $_REQUEST['direccion'];
                $coach->ciudad = $_REQUEST['ciudad'];
                $coach->telefono = $_REQUEST['telefono'];
                $coach->codPostal = $_REQUEST['codPostal'];
                if ($_FILES['imagen']['error']==0) {
                    $coach->imagen = $_FILES['imagen']['name'];
                } else {
                    $coach->imagen = $_REQUEST['imagen_actual'];
                }
                $coach->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $coach->actualizar();
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
                            header('location: /WolfGym/front-end/vistas/Coach/index.php?Error=' . $mensaje);
                            exit();
                        }
                    }
                    echo $mensaje = "actualizacón exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Coach/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la actualización";
                }
            } else {
                $mensaje = "faltan datos por enviar";
            }

            break;
        case 3: //borrado logico

            if (isset($_REQUEST['codigo'])) {

                //Crear objeto de la clase usuario
                $coach = new Coach();

                //Descargar datos enviados por el formulario 
                $coach->codigo = $_REQUEST['codigo'];
               
                //Ejecutar la función 
                $resultado = $coach->borrar();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "Borrado exitoso";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Coach/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible borrar";
                }
            } else {
                $mensaje = "faltan datos por enviar";
            }

            break;
    }
} else {
    echo "falta la variable opción";
}
