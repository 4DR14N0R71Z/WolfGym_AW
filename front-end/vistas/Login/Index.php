<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include_once "../../dashboard/head.php"
  ?>
</head>

<body style="background-image:url('../../../images/Login_screen.jpg'); background-size:cover;">
  <div id="preloader-active" class="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
          <img src="/WolfGym/front-end/img/FLogo.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <?php
  include_once "../../dashboard/header2.php"
  ?>
  <div class="contenedor">

    <div class="login-page" style="height:100%;">
      <div class="form" style="margin-top:20%;margin-bottom:23%; border-radius:10px;background: rgba(100, 100, 100, 0.5);">

        <form action="../../../back-end/controladores/login_controlador.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" value="4" name="opcion">
          <input type="text" name="email" placeholder="&#xf007;  Email" />
          <input type="password" id="password" name="pass" placeholder="&#xf023;  Contraseña" />
          <i class="fas fa-eye" onclick="show()" style="cursor: pointer; color:#fff;"></i>
          <br>
          <br>
          <button>Iniciar sesión</button>
          <p class="message"></p>
        </form>
      </div>
    </div>

</body>

</html>