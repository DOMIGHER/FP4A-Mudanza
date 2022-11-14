<div class="container">

    <div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-success" href="<?=base_url('index.php/AdmCam/insertC')?>">Agregar Camioneta</a>
    </div>
    
<table class="table table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Modelo</th>
        <th>Fecha de compra</th>
        <th>Peso de carga</th>
        <th>Pais de origen</th>
        <th>Tipo de vehiculo</th>
    </thead>
    <tbody>
        <?php foreach ($camioneta as $key): ?>
            <tr>
                <td><?=$key->idcamioneta?></td>
                <td><?=$key->modelo?></td>
                <td><?=$key->fecha_compra?></td>
                <td><?=$key->peso_carga?></td>
                <td><?=$key->pais_de_origen?></td>
                <td><?=$key->clase_vehiculo?></td>

                <td><a class="btn btn-success" href="<?=base_url('index.php/AdmCam/detalleC/').$key->idcamioneta?>">Detalles</a></td>
                <td><a class="btn btn-danger" href="<?=base_url('index.php/AdmCam/borrarC/').$key->idcamioneta?>">Borrar</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>