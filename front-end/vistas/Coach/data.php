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
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Telefono</th>
        <th>Codigo Postal</th>
        <th>Imagen</th>
        <th>Estatus</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $resultado = $coach->obtener_todo();
      foreach ($resultado as $coa) { {
        }
      ?>
        <tr>
          <td><?php echo $coa->Codigo ?></td>
          <td><?php echo $coa->Nombre ?></td>
          <td><?php echo $coa->ApellidoP ?></td>
          <td><?php echo $coa->ApellidoM ?></td>
          <td><?php echo $coa->Direccion ?></td>
          <td><?php echo $coa->Ciudad ?></td>
          <td><?php echo $coa->Telefono ?></td>
          <td><?php echo $coa->CodPostal ?></td>
          <td><img src="/WolfGym/back-end/imagenes/clientes/<?php echo $coa->Imagen ?>" width="100px" alt="foto del usuario"></td>
          <td><?php echo $coa->Status ?></td>
          <td><a href="index.php?editar&codigo=<?php echo $coa->Codigo ?>">Editar</a></td>
          <td><a href="index.php?borrar&codigo=<?php echo $coa->Codigo ?>">Borrar</a></td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
</div>