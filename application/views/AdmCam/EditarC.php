<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<div class="container">
    <?php echo validation_errors(); ?>
    <form action="<?= base_url('index.php/AdmCam/EditarC/').$camionetaD[0]->idcamioneta?>" method="POST">
        <div class="row">
            <div class="row">

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">ID Camioneta: </label>
                        <input type="text" class="form-control" name="idcamioneta" value="<?= $camionetaD[0]->idcamioneta?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Modelo: </label>
                        <select name="modelo" required value="<?= $camionetaD[0]->modelo?>">
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
                        <input type="date" class="form-control" name="fecha_compra" value="<?= $camionetaD[0]->fecha_compra?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Peso de carga: </label>
                        <input type="number" class="form-control" name="peso_carga" value="<?= $camionetaD[0]->peso_carga?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Pais de origen: </label>
                        <select name="pais_de_origen" value="<?= $camionetaD[0]->pais_de_origen?>">
                            <option value="Mex??co">Mex??co</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Canada">Canada</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Clave del vehiculo: </label>
                        <select name="clase_vehiculo" value="<?= $camionetaD[0]->clase_vehiculo?>">
                            <option value="Volteo">Volteo</option>
                            <option value="Carga">Carga</option>
                            <option value="Mudanza de inmuebles">Mudanza de inmuebles</option>
                            <option value="Otro">Otro</option>
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