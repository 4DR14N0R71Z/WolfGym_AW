<?php
if (!isset($_REQUEST['editar']) && !isset($_REQUEST['borrar'])) {

?>

<form class="needs-validation" novalidate action="../../../back-end/controladores/login_controlador.php" method="POST" enctype="multipart/form-data" style="color:#fff;">
    <input type="hidden" name="opcion" value="1">

    <div class="form-row">
        <div class="col-md-6 mb-1">
            <label for="validationCustom01">Id</label>
            <input type="number" class="form-control" id="validationCustom01" name="id" id="Codigo" maxlength="20" readonly>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-1">
            <label for="validationCustom01">Correo Electrónico</label>
            <input type="text" class="form-control" id="validationCustom01" name="email" id="Nombre" maxlength="45" required>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom02">Contraseña</label>
            <input type="password" class="form-control" id="validationCustom02" name="pass"  maxlength="45" required>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom04">Tipo</label><br>
            <select class="custom-select" id="validationCustom04" name="tipo" id="Status" required>
                <option selected disabled value="">Seleccionar...</option>
                <option value="Admin">Admin</option>
                <option value="Super">Supervisor</option>
                <option value="User">Usuario</option>
            </select>
            <div class="invalid-feedback">
                Selecciona un estatus disponible.
            </div>

        </div>
    </div>
    <div class="form-row">
        <div class="col-md-5 mb-1">
            <label for="validationCustom02">Imagen</label>
            <input type="file" class="form-control" id="validationCustom02" name="imagen" id="Imagen" accept="image">
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <label for="validationCustom04">Estatus</label><br>
            <select class="custom-select" id="validationCustom04" name="status" id="Status" required>
                <option selected disabled value="">Seleccionar...</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
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