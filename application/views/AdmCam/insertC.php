<div class="container">
    <?php echo validation_errors(); ?>
    <form action="<?= base_url('index.php/AdmCam/insertC') ?>" method="POST">
        <div class="row">
            <div class="row">

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">ID Camioneta: </label>
                        <input type="text" class="form-control" name="idcamioneta">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Modelo: </label>
                        <select name="modelo" required>
                            <option value="Ford Escape">Ford Escape</option>
                            <option value="Nissan X-Trail">Nissan X-Trail</option>
                            <option value="SEAT Ateca">SEAT Ateca</option>
                            <option value="Kia">Kia</option>
                            <option value="Sportage">Sportage</option>
                            <option value="Otro">Otro</option>
                            <option></option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Fecha de compra: </label>
                        <input type="date" class="form-control" name="fecha_compra">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Peso de carga: </label>
                        <input type="number" class="form-control" name="peso_carga">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Pais de origen: </label>
                        <select name="pais_de_origen">
                            <option value="M">Mexíco</option>
                            <option value="EU">Estados Unidos</option>
                            <option value="C">Canada</option>
                            <option value="O">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Clave del vehiculo: </label>
                        <select name="clase_vehiculo">
                            <option value="M">Volteo</option>
                            <option value="EU">Carga</option>
                            <option value="C">Mudanza de inmuebles</option>
                            <option value="O">Otro</option>
                        </select>
                    </div>
                </div>


            </div>
        </div>
        <hr style="width:1100px; height:2px;background:black">

        <div class="col-4">
            <div class="mb-3">
                <label class="form-label"> Subir foto de camioneta </label>
            </div>
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
</div>