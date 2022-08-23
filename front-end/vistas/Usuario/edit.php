<?php
if (isset($_REQUEST['id']) && isset($_REQUEST['editar'])) {
  $usuario->id = $_REQUEST['id'];
  $resultado = $usuario->obtener_por_id();
  $usu = $resultado[0];
?>
<form class="needs-validation" novalidate action="../../../back-end/controladores/login_controlador.php" method="POST" enctype="multipart/form-data" style="color:#fff;">
    <input type="hidden" name="opcion" value="2">

    <div class="form-row">
        <div class="col-md-6 mb-1">
            <label for="validationCustom01">Id</label>
            <input type="number" class="form-control" id="validationCustom01" name="id" id="Codigo" maxlength="20" readonly value="<?php echo $usu->Id ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-1">
            <label for="validationCustom01">Email</label>
            <input type="text" class="form-control" id="validationCustom01" name="email" id="Nombre" maxlength="45" required value="<?php echo $usu->Email ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Contraseña</label>
            <input type="text" class="form-control" id="validationCustom02" name="pass"  maxlength="45" required value="<?php echo $usu->Pass ?>">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Tipo</label>
            <select class="custom-select" id="validationCustom04" name="tipo" id="Status" required>
                <option selected disabled value="">Seleccionar...</option>
                <option value="Admin" <?php echo ($usu->Tipo == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                <option value="Super" <?php echo ($usu->Tipo == 'Super') ? 'selected' : ''; ?>>Supervisor</option>
                <option value="User" <?php echo ($usu->Tipo == 'User') ? 'selected' : ''; ?>>Usuario</option>
            </select>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
    <div class="form-row">
        <div class="col-md-5 mb-1">
        <input type="hidden" name="imagen_actual" value="<?php echo $usu->Imagen ?>">
        <img src="/WolfGym/back-end/imagenes/login/<?php echo $usu->Imagen ?>" alt="<?php echo $usu->Imagen ?>" width="100px">
        <label for="validationCustom02"><?php echo $usu->Imagen ?></label>
        <input type="file" class="form-control" id="validationCustom02" name="imagen" id="imagen" accept="image/*">
            <div class="valid-feedback">
                Correcto!
            </div>
    </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom04">Estatus</label><br>
            <select class="custom-select" id="validationCustom04" name="status" id="Status" required>
                <option disabled value="">Seleccionar...</option>
                <option value="Activo" <?php echo ($usu->Status == 'Activo') ? 'selected' : ''; ?>>Activo</option>
          <option value="Inactivo" <?php echo ($usu->Status == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
        </select>
            <div class="invalid-feedback">
                Selecciona un estatus disponible.
            </div>

        </div>
    </div>
    <br>
</div>
<button class="btn btn-primary small w-25" type="reset">Cancelar</button>
<button class="btn btn-primary small w-25" type="submit">Enviar</button>
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