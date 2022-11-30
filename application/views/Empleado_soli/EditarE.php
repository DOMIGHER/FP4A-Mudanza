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
    <form action="<?= base_url('index.php/Empleado_solicitud/EditarE/').$deta[0]->idsolicitud?>" method="POST">
        <div class="row">
            <div class="row">

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">idsolucitud: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="idsolicitud" value="<?= $deta[0]->idsolicitud?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">idcliente: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="idcliente" value="<?= $deta[0]->idcliente?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">idempleado: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="idempleado" value="<?= $deta[0]->idempleado?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">idcamioneta: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="idcamioneta" value="<?= $deta[0]->idcamioneta?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">idadministrador: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="idadministrador" value="<?= $deta[0]->idadministrador?>">
                    </div>
                </div>


                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">iddireccionorigen: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="iddireccionorigen" value="<?= $deta[0]->iddireccionorigen?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">iddirecciondestino: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="iddirecciondestino" value="<?= $deta[0]->iddirecciondestino?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">idpagototal: </label>
                        <input type="text" class="form-control" readonly=»readonly» readonly=»readonly» name="idpagototal" value="<?= $deta[0]->idpagototal?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">fecha_registro: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="fecha_registro" value="<?= $deta[0]->fecha_registro?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">num_objeto_pequenio: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="num_objeto_pequenio" value="<?= $deta[0]->num_objeto_pequenio?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">num_objeto_mediano: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="num_objeto_mediano" value="<?= $deta[0]->num_objeto_mediano?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">numero_objeto_grande: </label>
                        <input type="text" class="form-control" readonly=»readonly» readonly=»readonly» name="numero_objeto_grande" value="<?= $deta[0]->numero_objeto_grande?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">descripcion_objeto: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="descripcion_objeto" value="<?= $deta[0]->descripcion_objeto?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">costo_estacionamiento: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="costo_estacionamiento" value="<?= $deta[0]->costo_estacionamiento?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">tipo_acceso: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="tipo_acceso" value="<?= $deta[0]->tipo_acceso?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">tipo_vivienda: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="tipo_vivienda" value="<?= $deta[0]->tipo_vivienda?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">tipo_fragilidad: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="tipo_fragilidad" value="<?= $deta[0]->tipo_fragilidad?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label"> fecha_mudanza: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="fecha_mudanza" value="<?= $deta[0]->fecha_mudanza?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">curp: </label>
                        <input type="text" class="form-control" readonly=»readonly» name="curp" value="<?= $deta[0]->curp?>">
                    </div>
                </div>


            <div class="row">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                        <td><a class="btn btn-warning" href="<?= base_url('index.php/Empleado_solicitud/show/')?>">Regresar</a></td>

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
</html>