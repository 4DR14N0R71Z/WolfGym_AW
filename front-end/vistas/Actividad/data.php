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
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Inicio</th>
        <th>Termino</th>
        <th>Coach</th>
        <th>Estatus</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $resultado = $actividad->obtener_todo();
      foreach ($resultado as $act) { {
        }
      ?>
        <tr>
          <td><?php echo $act->Codigo ?></td>
          <td><?php echo $act->Nombre ?></td>
          <td><?php echo $act->Descripcion ?></td>
          <td><?php echo $act->Fecha ?></td>
          <td><?php echo $act->Inicio ?></td>
          <td><?php echo $act->Termino ?></td>
          <td><?php echo $act->Coach ?></td>
          <td><?php echo $act->Status ?></td>
          <td><a href="index.php?editar&codigo=<?php echo $act->Codigo ?>">Editar</a></td>
          <td><a href="index.php?borrar&codigo=<?php echo $act->Codigo ?>">Borrar</a></td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
</div>