<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Wolf Gym</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/WG.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, user-scalable=none initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
  <div class="contenedor">
    <section id="home">
      <header>
        <a href="#"><img src="images/WG.png" alt="Logo de WolfGym"></a>
        <ul id="menu">
          <li><a href="#home">Inicio</a></li>
          <li><a href="#coaches">Coaches</a></li>
          <li><a href="#equipo">Equipo</a></li>
          <li><a href="#actividades">Actividades</a></li>
          <li><a href="#contacto">Contacto</a></li>
          <li><a href="#login">Iniciar sesión</a></li>
        </ul>
      </header>
      <article>
        <h2>Inicio</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum laboriosam illo, ad ullam, voluptatem rerum,
          ipsa totam porro minus cumque dolor hic qui. Consequuntur saepe magnam ullam laudantium esse quaerat!</p>
      </article>
    </section>
    <section id="coaches">
      <h2>Coaches</h2>
    </section>
    <section id="equipo">
      <h2>Equipo</h2>
    </section>
    <section id="actividades">
      <h2>Actividades</h2>
    </section>
    <section id="contacto">
      <h2>Contacto</h2>
    </section>
    <section id="login">
      <h2>Iniciar sesión</h2>

      <form action="login.php" method="post">
        <div class="imgcontainer">
          <img src="images/WG.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Usuario" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Contraseña" name="psw" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#474747f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#">¿Olvidaste la contraseña?</a></span>
        </div>
      </form>
    </section>
  </div>
</body>

</html>