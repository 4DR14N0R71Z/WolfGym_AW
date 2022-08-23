<?php
require_once "../modelos/actividad.php";
print_r($_POST);
if (isset($_REQUEST['opcion'])) {

    $opcion = $_REQUEST['opcion'];
    switch ($opcion) {
        case 1: //crear
            if (isset($_REQUEST['nombre']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['fecha']) && isset($_REQUEST['inicio']) && isset($_REQUEST['termino']) && isset($_REQUEST['coach']) && isset($_REQUEST['status'])) {

                //Crear objeto de la clase usuario
                $actividad = new Actividad();

                //Descargar datos enviados por el formulario 
                $actividad->nombre = $_REQUEST['nombre'];
                $actividad->descripcion = $_REQUEST['descripcion'];
                $actividad->fecha = $_REQUEST['fecha'];
                $actividad->inicio = $_REQUEST['inicio'];
                $actividad->termino = $_REQUEST['termino'];
                $actividad->coach = $_REQUEST['coach'];
                $actividad->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $actividad->crear();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "inserción exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Actividad/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    echo $mensaje = "no fue posible realizar la inserción";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }
            break;
        case 2: //actualizar

            if (isset($_REQUEST['codigo']) && isset($_REQUEST['nombre']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['fecha']) && isset($_REQUEST['inicio']) && isset($_REQUEST['termino']) && isset($_REQUEST['coach']) && isset($_REQUEST['status'])) {

                //Crear objeto de la clase usuario
                $actividad = new Actividad();

                //Descargar datos enviados por el formulario 
                $actividad->codigo = $_REQUEST['codigo'];
                $actividad->nombre = $_REQUEST['nombre'];
                $actividad->descripcion = $_REQUEST['descripcion'];
                $actividad->fecha = $_REQUEST['fecha'];
                $actividad->inicio = $_REQUEST['inicio'];
                $actividad->termino = $_REQUEST['termino'];
                $actividad->coach = $_REQUEST['coach'];
                $actividad->status = $_REQUEST['status'];

                //Ejecutar la función 
                $resultado = $actividad->actualizar();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "actualizacón exitosa";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Actividad/index.php?mensaje=' . $mensaje);
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
                $actividad = new Actividad();

                //Descargar datos enviados por el formulario 
                $actividad->codigo = $_REQUEST['codigo'];
               
                //Ejecutar la función 
                $resultado = $actividad->borrar();
                $mensaje = "";
                if ($resultado == 1) {
                    echo $mensaje = "Borrado exitoso";
                    //Aplicar una vez que el proceso de inserción este completado
                    header('location: /WolfGym/front-end/vistas/Actividad/index.php?mensaje=' . $mensaje);
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
