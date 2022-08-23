<!--? Header Start -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="/WolfGym/front-end/Img/Flogo.png" alt="" height="50px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll">
            <li class="nav-item">
                <a class="nav-link" href="/WolfGym/index.php">Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/WolfGym/index.php#coaches">Coaches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/WolfGym/index.php#equipo">Instalaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/WolfGym/index.php#contacto">Contacto</a>
            </li>

            <?php
            if (isset($_SESSION['tipo'])) {


                if ($_SESSION['tipo'] == 'Admin') {
            ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/WolfGym/front-end/vistas/Cliente/index.php">Registro</a>
                    </li>
            <?php
                }
            }
            ?>

            <?php

            if (!isset($_SESSION['tipo'])) {
            ?>

                <li class="nav-item">
                    <form action="/Wolfgym/front-end/vistas/Login/Index.php" method="POST">
                        <button class="btn btn-secondary" type="submit">Iniciar Sesión</a>
                    </form>
                </li>
            <?php
            } else {

            ?>
                <li class="nav-item">
                    <form action="/Wolfgym/back-end/controladores/login_controlador.php" method="POST">
                        <button class="btn btn-secondary" type="submit">Cerrar Sesión</a>
                            <input type="hidden" name="opcion" value="5">


                    </form>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>

<!-- Header End -->