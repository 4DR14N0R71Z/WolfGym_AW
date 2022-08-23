<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include_once "front-end/dashboard/head.php"
  ?>
</head>

<body style="background: #313038;">

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
  include_once "front-end/dashboard/header2.php"
  ?>
  <div class="contenedor">

    <section id="home">
      <div class="Blema" id="blur">
        <p class="entrena">Entrena</p>
        <div class="Blema2">
          <ul class="lema">
            <li>Duro</li>
            <li style="color:#000;-webkit-text-stroke: 5px white;">WolfGym</li>
            <li>Salvaje</li>
          </ul>
        </div>
      </div>
      <video id="background" muted autoplay loop>
        <source src="images/VB.mp4" type="video/mp4">
        <source src="images/VB.webm" type="video/webm">
      </video>
    </section>
    <section id="coaches">
      <h2>Coaches</h2>
      <div class="galeria">
        <div class="contenedor-imagenes">
          <div class="imagen">
            <img src="https://media.istockphoto.com/photos/confident-gym-owner-picture-id1324042769?b=1&k=20&m=1324042769&s=170667a&w=0&h=jAwDr6qkVDFxds70ODp0rlzaofDKXNhdaKZyfM_l-eQ=" alt="">
            <div class="overlay">
              <h6 class="Cname">David Barrera</h6>
              <br />
              <p class="Cdescriptions">
                Edad: 28 años. <br>
                Nacionalidad: Uruguayo. <br>
                Miembro desde: 2009.
              </p>
            </div>
          </div>
          <div class="imagen">
            <img src="https://media.istockphoto.com/photos/portrait-of-chinese-personal-trainer-in-gym-picture-id1018043738?k=20&m=1018043738&s=612x612&w=0&h=9qZelesrux2DeXL9OMcoO3hK8cBPaa9qwTc_wHXdo7k=" alt="">
            <div class="overlay">
              <h6 class="Cname">Akira Yamimoto</h6>
              <br />
              <p class="Cdescriptions">
                Edad: 25 años. <br>
                Nacionalidad: Japonés. <br>
                Miembro desde: 2012.
              </p>
            </div>
          </div>
          <div class="imagen">
            <img src="https://media.istockphoto.com/photos/portrait-of-a-female-personal-trainer-in-the-gym-picture-id1040495528?k=20&m=1040495528&s=170667a&w=0&h=SrqX_8m-4jXcpSKAmWreiW5E9RWZMEDv_sDhz10daC0=" alt="">
            <div class="overlay">
              <h6 class="Cname">Valeria Torrealba</h6>
              <br />
              <p class="Cdescriptions">
                Edad: 25 años. <br>
                Nacionalidad: Mexicana. <br>
                Miembro desde: 2015.
              </p>
            </div>
          </div>
          <div class="imagen">
            <img src="https://media.istockphoto.com/photos/portrait-of-a-beautiful-woman-at-the-gym-picture-id856797530?k=6&m=856797530&s=612x612&w=0&h=_hDfYO_exuYj3jq157FAr_Al6dA-lCi7lLDtwKmFh48=" alt="">
            <div class="overlay">
              <h6 class="Cname">Valentina Jiménez</h6>
              <br />
              <p class="Cdescriptions">
                Edad: 31 años. <br>
                Nacionalidad: Colombiana. <br>
                Miembro desde: 2018.
              </p>
            </div>
          </div>
          <div class="imagen">
            <img src="https://media.istockphoto.com/photos/young-african-american-male-personal-trainer-picture-id475395886?k=20&m=475395886&s=612x612&w=0&h=sbFFXC-YWIlWI0kekUv-4iz8SAGKeVNTdu2G0FPJhss=" alt="">
            <div class="overlay">
              <h6 class="Cname">Nathan Jackson</h6>
              <br />
              <p class="Cdescriptions">
                Edad: 32 años. <br>
                Nacionalidad: Estadounidense. <br>
                Miembro desde: 2014.
              </p>
            </div>
          </div>
          <div class="imagen">
            <img src="https://static8.depositphotos.com/1011643/1067/i/600/depositphotos_10678547-stock-photo-gym-trainer-welcome-customer.jpg" alt="">
            <div class="overlay">
              <h6 class="Cname">Ignacio Ramirez</h6><br />
              <p class="Cdescriptions">
                Edad: 45 años. <br>
                Nacionalidad: Venezolano. <br>
                Miembro desde: 2004.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="equipo">
      <h2>Instalaciones</h2>
      <div class="Instalaciones">
        <ul>
          <li><img src="https://www.gimnasioc21.com/s/cc_images/cache_77241085.JPG" alt=""></li>
          <li><img src="https://truefitness.com/wp-content/uploads/2020/10/Greystone-1-1024x768.jpg" alt=""></li>
          <li><img src="https://etenonfitness.com/wp-content/uploads/2021/12/gimnasio-1024x768.jpeg" alt=""></li>
          <li><img src="https://www.gimnasioc21.com/s/cc_images/cache_77241092.JPG" alt=""></li>
          <li><img src="https://www.albirgardensports.com/wp-content/uploads/2020/09/gimnasio.jpg" alt=""></li>
          <li><img src="https://www.princess-hotels.com/wp-content/uploads/sites/1738/nggallery/vitalfitness-la-palma//2-fitness.jpg" alt=""></li>
          <li><img src="https://www.akonfitness.com/wp-content/uploads/2022/05/HomeGymAlicante-4.jpeg.webp" alt=""></li>
          <li><img src="https://www.purefitness.es/profesional/wp-content/uploads/anytime-fitness-jerez-02-1024x768.jpg" alt=""></li>
          <li><img src="https://stadioalicante.com/wp-content/uploads/2019/08/sala-fitness-cardio-1-1024x768.jpg" alt=""></li>
          <li><img src="https://live.staticflickr.com/3487/3308974746_1507366a9a_b.jpg" alt=""></li>
        </ul>
      </div>
    </section>
    <section id="contacto">
      <h2>Contacto</h2>

      <form action="" method="" class="formulario">
        <div class="imgcontainer">
          <img src="images/FLogo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container-form">

          <input type="text" placeholder="Nombre" name="Nombre" required>


          <input type="email" placeholder="Correo electrónico" name="email" required>


          <input type="text" placeholder="Teléfono" name="phone" required>

          <textarea name="mensaje" placeholder="Escriba su mensaje"></textarea>

          <button type="submit">ENVIAR MENSAJE</button>
        </div>
      </form>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Ir arriba"><img src="front-end/img/up-arrow.png"></button>
  </div>
  <footer>
    <?php
    include_once "front-end/dashboard/footer.php"
    ?>
  </footer>

</body>

</html>