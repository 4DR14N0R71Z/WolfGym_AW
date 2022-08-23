<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">

      <?php
      if ($_SESSION['tipo'] == 'Admin'){

      ?>
      <li class="nav-item">
        <a class="nav-link active" href="/WolfGym/front-end/vistas/Usuario/index.php">
          <span data-feather="home"></span>
          Usuarios <span class="sr-only"></span>
        </a>
      </li>
      <?php
      }
      if (($_SESSION['tipo'] == 'Admin') || ($_SESSION['tipo'] == 'Super') ){
      ?>
      <li class="nav-item">
        <a class="nav-link active" href="/WolfGym/front-end/vistas/Cliente/index.php">
          <span data-feather="home"></span>
          Clientes <span class="sr-only"></span>
        </a>
      </li>
      <?php
      }
      if (($_SESSION['tipo'] == 'Admin') || ($_SESSION['tipo'] == 'Super') ){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="/WolfGym/front-end/vistas/Coach/index.php">
          <span data-feather="file"></span>
          Coaches
        </a>
      </li>
      <?php
      }
      if (($_SESSION['tipo'] == 'Admin') || ($_SESSION['tipo'] == 'Super') || (($_SESSION['tipo'] == 'User') ) ){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="/WolfGym/front-end/vistas/Actividad/index.php">
          <span data-feather="shopping-cart"></span>
          Actividades
        </a>
      </li>
      <?php
      }
      if (($_SESSION['tipo'] == 'Admin') || ($_SESSION['tipo'] == 'Super') || (($_SESSION['tipo'] == 'User') ) ){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="/WolfGym/front-end/vistas/Inscribir/index.php">
          <span data-feather="users"></span>
          Inscribir
        </a>
      </li>
      <?php
      }
      ?>
    </ul>

  </div>
</nav>