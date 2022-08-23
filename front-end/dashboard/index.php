<?php
session_start();
?>

<!doctype html>
<html lang="es">

<head>
  <?php
  include_once "head.php"
  ?>
</head>

<body style="background: #313038;">
  <?php
  include_once "header2.php"
  ?>


  <div class=" container-fluid">
    <div class="row">
      <?php
      include_once "navbar.php"
      ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-light">
          <h1 class="h2">WolfGym</h1>
        </div>
    </div>

    <footer>
      <?php
      include_once "footer.php"
      ?>
    </footer>

</body>

</html>