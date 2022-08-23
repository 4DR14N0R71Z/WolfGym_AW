<?php
if (isset($_REQUEST['codigo']) && isset($_REQUEST['editar'])) {
  $cliente->codigo = $_REQUEST['codigo'];
  $resultado = $cliente->obtener_por_id();
  $cli = $resultado[0];
?>
<form class="needs-validation" novalidate action="../../../back-end/controladores/cliente_controlador.php" method="POST" enctype="multipart/form-data" style="color:#fff;">
    <input type="hidden" name="opcion" value="2">

    <div class="form-row">
        <div class="col-md-6 mb-1">
            <label for="validationCustom01">Codigo</label>
            <input type="number" class="form-control" id="validationCustom01" name="codigo" id="Codigo" maxlength="20" readonly value="<?php echo $cli->Codigo ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-1">
            <label for="validationCustom01">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" name="nombre" id="Nombre" maxlength="45" required value="<?php echo $cli->Nombre ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Primer Apellido</label>
            <input type="text" class="form-control" id="validationCustom02" name="apellidoP"  maxlength="45" required value="<?php echo $cli->ApellidoP ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Segundo Apellido</label>
            <input type="text" class="form-control" id="validationCustom02" name="apellidoM"  maxlength="45" required value="<?php echo $cli->ApellidoM ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-1">
            <label for="validationCustom01">Dirección</label>
            <input type="text" class="form-control" id="validationCustom01" name="direccion" id="Nombre" maxlength="45" required value="<?php echo $cli->Direccion ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Ciudad</label>
            <input type="text" class="form-control" id="validationCustom02" name="ciudad"  maxlength="45" required value="<?php echo $cli->Ciudad ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Código Postal</label>
            <input type="text" class="form-control" id="validationCustom02" name="codPostal"  maxlength="45" required value="<?php echo $cli->CodPostal ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Teléfono</label>
            <input type="tel" class="form-control" id="validationCustom02" name="telefono"  maxlength="45" required value="<?php echo $cli->Telefono ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>

    </div>

    <div class="form-row">
        <div class="col-md-5 mb-1">
        <input type="hidden" name="imagen_actual" value="<?php echo $cli->Imagen ?>">
        <img src="/WolfGym/back-end/imagenes/clientes/<?php echo $cli->Imagen ?>" alt="<?php echo $cli->Imagen ?>" width="100px">
        <label for="validationCustom02"><?php echo $cli->Imagen ?></label>
        <input type="file" class="form-control" id="validationCustom02" name="imagen" id="imagen" accept="image/*">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom04">Estatus</label><br>
            <select class="custom-select" id="validationCustom04" name="status" id="Status" required>
                <option disabled value="">Seleccionar...</option>
                <option value="Activo" <?php echo ($cli->Status == 'Activo') ? 'selected' : ''; ?>>Activo</option>
          <option value="Inactivo" <?php echo ($cli->Status == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
        </select>
            <div class="invalid-feedback">
                Selecciona un estatus disponible.
            </div>

        </div>
    </div>

    <button class="btn btn-primary small w-25" type="reset">Cancelar</button>
    <button class="btn btn-primary small w-25" type="submit">Enviar</button>
    </div>
</form>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php
}
?>