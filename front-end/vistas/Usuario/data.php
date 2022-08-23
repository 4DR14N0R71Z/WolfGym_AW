<?php

?>

<?php
if (isset($_GET['mensaje'])) {

?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Operación Exitosa!</strong> <?php echo $_GET['mensaje'] ?>.
  </div>

<?php
}
?>
<div class="table-responsive bg-light">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>Id</th>
        <th>Correo Electrónico</th>
        <th>Contraseña</th>
        <th>Tipo</th>
        <th>Imagen</th>
        <th>Estatus</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $resultado = $usuario->obtener_todo();
      foreach ($resultado as $usu) { {
        }
      ?>
        <tr>
          <td><?php echo $usu->Id ?></td>
          <td><?php echo $usu->Email ?></td>
          <td><?php echo $usu->Pass ?></td>
          <td><?php echo $usu->Tipo ?></td>
          <td><img src="/WolfGym/back-end/imagenes/login/<?php echo $usu->Imagen ?>" width="100px" alt="foto del usuario"></td>
          <td><?php echo $usu->Status ?></td>
          <td><a href="index.php?editar&id=<?php echo $usu->Id ?>">Editar</a></td>
          <td><a href="index.php?borrar&id=<?php echo $usu->Id ?>">Borrar</a></td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
</div>