<?php
if (!isset($_REQUEST['editar']) && !isset($_REQUEST['borrar'])) {

?>

    <form class="needs-validation" novalidate action="../../../back-end/controladores/inscribir_controlador.php" method="POST" enctype="multipart/form-data" style="color:#fff;">
        <input type="hidden" name="opcion" value="1">

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom01">Cliente</label>
                <select class="custom-select" id="validationCustom04" name="cliente" id="" required>
                    <option selected disabled value="">Seleccionar...</option>
                    <?php
                    foreach ($resultCliente as $cli) :
                    ?>
                        <option value="<?php echo $cli->Codigo; ?>"><?php echo $cli->Nombre;
                                                                    echo " ";
                                                                    echo $cli->ApellidoP; ?></option> <?php  ?>
                    <?php
                    endforeach;
                    ?>
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom01">Actividad</label>
                <select class="custom-select" id="validationCustom04" name="actividad" id="" required>
                    <option selected disabled value="">Seleccionar...</option>
                    <?php
                    foreach ($resultActividad as $act) :
                    ?>
                        <option value="<?php echo $act->Codigo; ?>"><?php echo $act->Nombre; ?></option> <?php  ?>
                    <?php
                    endforeach;
                    ?>
                </select>
                <div class="valid-feedback">
                    Looks good!
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