<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>Wolf Gym</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/WG.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, user-scalable=none initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio | WolfGym</title>
</head>

<body>
  <div class="contenedor">
    <div class="nav"></div>
    <section id="home">
      <div class="himg"><a href="#"><img src="images/FLogo.png" alt="Logo de WolfGym"></a></div>
      <header>
        <div class="nav">
          <ul id="menu">
            <li><a href="#home">Inicio</a></li>
            <li><a href="#coaches">Coaches</a></li>
            <li><a href="#equipo">Equipo</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="#login">Iniciar sesión</a></li>
          </ul>
        </div>
      </header>
      <article class="boxtext">
        <p class="Pboxtext">
        <h2>Inicio</h2>boxtext1Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum laboriosam illo, ad ullam, voluptatem rerum,
        ipsa totam porro minus cumque dolor hic qui. Consequuntur saepe magnam ullam laudantium esse quaerat!</p>
      </article>
      <article class="boxtext2">
        <p class="Pboxtext">
        <h3>Misión</h3>BT2Ser el centro de fitness más grande de latinoamérica y el mundo</p>
      </article>
      <article class="boxtext3">
        <p class="Pboxtext">BT3Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, corrupti. Praesentium blanditiis minus amet eaque fugiat temporibus modi aliquid quod laudantium. Mollitia repellat dignissimos porro saepe beatae cupiditate, veritatis accusamus.</p>
      </article>
    </section>
    <section id="coaches">
      <article class="onebox">
        <div class="oneboximg">
          <p class="ponebox">
          Mike Phillips
        </p><img src="https://as1.ftcdn.net/v2/jpg/00/73/58/96/1000_F_73589699_I4s2nX0Enc3eQ78T6V1SG5Ac9LF7jsxr.jpg" alt="">
        </div>
        <div class="oneboximg2">
          <p class="ponebox2">
          Amy Fouler
        </p><img src="https://media.istockphoto.com/photos/portrait-of-a-beautiful-woman-at-the-gym-picture-id856797530?k=20&m=856797530&s=612x612&w=0&h=kFFhoXpDoF6jCmerJe-cZzOMKRvpl2orilNip2t3McU=" alt="">
        </div>
        <div class="oneboximg3">
          <p class="ponebox3">
          David Guetta
        </p><img src="https://media.istockphoto.com/photos/muscular-trainer-writing-on-clipboard-picture-id675179390?k=20&m=675179390&s=612x612&w=0&h=7LP7-OamGu-b8XG-VKcJuamK5s80ke-4oJ5siUrjFVA=" alt="">
        </div>
        <div class="oneboximg4">
          <p class="ponebox4">
          Mike Phillips
        </p><img src="https://www.muscleandfitness.com/wp-content/uploads/2020/09/THEROCK.jpg?quality=86&strip=all" alt="">
        </div>
      <h2>Coaches</h2>
      </article>
    </section>
    <section id="equipo">
      <h2>Equipo</h2>
    </section>
    <section id="contacto">
      <h2>Contacto</h2>
    </section>
    <section id="login">
      <h2>Iniciar sesión</h2>

      <form action="login.php" method="post">
        <div class="imgcontainer">
          <img src="images/FLogo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Usuario" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Contraseña" name="psw" required>

          <button type="submit">Login</button>
        </div>
      </form>
    </section>
  </div>
</body>
</html>