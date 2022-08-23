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
        <th>Cliente</th>
        <th>Actividad</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $resultado = $inscribir->obtener_todo();
      foreach ($resultado as $ins) { {
        }
      ?>
        <tr>
          <td><?php echo $ins->Cliente ?></td>
          <td><?php echo $ins->Actividad ?></td>
          <td><a href="index.php?editar&cliente=<?php echo $ins->CodCliente ?>&actividad=<?php echo $ins->CodActividad ?>">Editar</a></td>
          <td><a href="index.php?borrar&cliente=<?php echo $ins->CodCliente ?>&actividad=<?php echo $ins->CodActividad ?>">Borrar</a></td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
</div>