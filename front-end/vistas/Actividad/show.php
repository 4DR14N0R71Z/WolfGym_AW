<?php
if (isset($_REQUEST['codigo']) && isset($_REQUEST['borrar'])) {
    $actividad->codigo = $_REQUEST['codigo'];
    $resultado = $actividad->obtener_por_id();
    $act = $resultado[0];
?>
    <form class="needs-validation" novalidate action="../../../back-end/controladores/actividad_controlador.php" method="POST" enctype="multipart/form-data" style="color:#fff;">
        <input type="hidden" name="opcion" value="3">

        <div class="form-row">
            <div class="col-md-6 mb-1">
                <label for="validationCustom01">Codigo</label>
                <input type="number" class="form-control" id="validationCustom01" name="codigo" id="Codigo" maxlength="20" readonly value="<?php echo $act->Codigo ?>">
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-1">
                <label for="validationCustom01">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre" id="Nombre" maxlength="45" readonly value="<?php echo $act->Nombre ?>">
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div class="col-md-3 mb-1">
                <label for="validationCustom02">Descripción</label>
                <input type="text" class="form-control" id="validationCustom02" name="descripcion" id="Apellidos" maxlength="45" readonly value=" <?php echo $act->Descripcion ?>">
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

        </div>
        <div class="form-row">
            <div class="col-md-3 mb-1">
                <label for="validationCustom02">Coach</label>
                <select class="custom-select" id="validationCustom04" name="coach" id="" disabled>
                    <option selected disabled value="">Seleccionar...</option>
                    <?php
                    foreach ($resultCoach as $coa) :
                    ?>
                        <option value="<?php echo $coa->Codigo; ?>"><?php echo $coa->Nombre; echo " "; echo $coa->ApellidoP; ?></option> <?php  ?>
                    <?php
                    endforeach;
                    ?>
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div class="col-md-3 mb-1">
                <label for="validationCustom02">Fecha</label>
                <input type="date" class="form-control" id="validationCustom02" name="fecha" id="Apellidos" maxlength="45" readonly value="<?php echo $act->Fecha ?>">
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-1">
                <label for="validationCustom02">Inicio</label>
                <input type="time" class="form-control" id="validationCustom02" name="inicio" id="Apellidos" maxlength="45" readonly value="<?php echo $act->Inicio ?>">
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div class="col-md-3 mb-1">
                <label for="validationCustom02">Fin</label>
                <input type="time" class="form-control" id="validationCustom02" name="termino" id="Apellidos" maxlength="45" readonly value="<?php echo $act->Termino ?>">
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-3 mb-1">
                <label for="validationCustom04">Estatus</label><br>
                <select class="custom-select" id="validationCustom04" name="status" id="Status" disabled>
                    <option disabled value="">Seleccionar...</option>
                    <option value="Activo" <?php echo ($act->Status == 'Activo') ? 'selected' : ''; ?>>Activo</option>
                    <option value="Inactivo" <?php echo ($act->Status == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
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