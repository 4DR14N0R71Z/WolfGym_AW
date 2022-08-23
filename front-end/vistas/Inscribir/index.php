<?php
session_start();
?>

<?php
include_once "../../../back-end/modelos/actividad.php";
include_once "../../../back-end/modelos/cliente.php";
include_once "../../../back-end/modelos/inscribir.php";

$actividad = new Actividad();
$cliente = new Cliente();
$inscribir = new Inscribir();

$resultActividad = $actividad->obtener_todo();
$resultCliente = $cliente->obtener_todo();

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>WolfGym</title>

    <?php
    include_once "../../dashboard/head.php"
    ?>
</head>

<body style="background: #313038;">
    <?php
    include_once "../../dashboard/header2.php"
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
            include_once "../../dashboard/navbar.php"
            ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-light">
                    <h1 class="h2">Inscribir</h1>
                </div>

                <?php
                include "create.php";
                include "show.php";
                ?>
                <br><br><br>
                <?php
                include "data.php";
                ?>

                <br><br><br>
            </main>
        </div>
    </div>
    <footer>
        <?php
        include_once "../../dashboard/footer.php"
        ?>
        <!-- Footer End-->
    </footer>


</body>

</html>