<div class="container">
    <?php echo validation_errors(); ?>
    <form action="<?=base_url('index.php/AdmEm/insertE') ?>" method="POST">
        <div class="row">
            <div class="row">

                <div class="col-5">
                    <div class="mb-3">
                        <label class="form-label">ID empleado: </label>
                        <input type="text" class="form-control" name="idempleado">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" name="apellido_paterno">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" name="apellido_materno">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="correo">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="contrasenia">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="number" class="form-control" name="celular">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Telefono fijo: </label>
                        <input type="number" class="form-control" name="telefono_fijo">
                    </div>
                </div>


                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Pais de nacimiento: </label>
                        <select name="nacionalidad">
                            <option value="M">Mexíco</option>
                            <option value="EU">Estados Unidos</option>
                            <option value="C">Canada</option>
                            <option value="O">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Sexo</label>
                        <select name="sexo">
                            <option value="H">Hombre</option>
                            <option value="M">Mujer</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Fecha de nacimiento: </label>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                </div>
            </div>
        </div>
        <hr style="width:1100px; height:2px;background:black">

        <div class="row">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Numero de licencia: </label>
                        <input type="text" class="form-control" name="num_licencia">
                    </div>
                </div>
                <div id="vertical-bar">

                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label"> Subir foto de perfil </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">RFC: </label>
                        <input type="text" class="form-control" name="rfc">
                    </div>
                </div>
                <div id="vertical-bar"></div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Carta de antecedentes no penales</label>
                        <select name="antecedentes_penales">
                            <option value="S">Si</option>
                            <option value="N">No</option>
                        </select>
                    </div>
                </div>
                <div id="vertical-bar"></div>
            </div>

            <hr style="width:1100px; height:2px;background:black">

            <div class="row">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <input type="submit">

                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>

</form> 
<style>
    #vertical-bar {
        border-left: 1px solid rgb(0, 0, 0);
        width: 1px;
        height: 100px;
        margin-left: 200px;
    }
</style>
</div>