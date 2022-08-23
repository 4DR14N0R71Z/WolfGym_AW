<?php
require_once "../modelos/inscribir.php";
print_r($_POST);
if (isset($_REQUEST['opcion'])) {

    $opcion = $_REQUEST['opcion'];
    switch ($opcion) {
        case 1: //crear
            if (isset($_REQUEST['cliente']) && isset($_REQUEST['actividad']) ) {

                //Crear objeto de la clase usuario
                $inscribir = new Inscribir();

                //Descargar datos enviados por el formulario 
                $inscribir->cliente = $_REQUEST['cliente'];
                $inscribir->actividad = $_REQUEST['actividad'];

                //Ejecutar la función 
                $resultado = $inscribir->crear();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "inserción exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Inscribir/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la inserción";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }
            break;
        case 2: //actualizar

            if (isset($_REQUEST['cliente']) && isset($_REQUEST['codigo'])) {

                //Crear objeto de la clase usuario
                $inscribir = new Inscribir();

                //Descargar datos enviados por el formulario 
                $inscribir->cliente = $_REQUEST['cliente'];
                $inscribir->actividad = $_REQUEST['actividad'];

                //Ejecutar la función 
                $resultado = $inscribir->actualizar();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "actualizacón exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Inscribir/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la actualización";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }

            break;
        case 3: //borrado logico

            if (isset($_REQUEST['cliente']) && isset($_REQUEST['actividad']) ) {

                //Crear objeto de la clase usuario
                $inscribir = new Inscribir();

                //Descargar datos enviados por el formulario 
                $inscribir->cliente = $_REQUEST['cliente'];
                $inscribir->actividad = $_REQUEST['actividad'];
               
                //Ejecutar la función 
                $resultado = $inscribir->borrar();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "Borrado exitoso";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Inscribir/index.php?mensaje=' . $mensaje);
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
