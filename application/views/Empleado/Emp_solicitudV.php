<div class="container">

    <div class="d-grid gap-2 col-6 mx-auto">
    <label class="form-label">Solicitudes </label>
    </div>
    
<table class="table table-striped table-bordered">
    <thead>
        <th>ID solicitud</th>
        <th>ID cliente</th>
        <th>ID empleado</th>
        <th>ID camioneta</th>
        <th>ID administrador</th>
        <th>ID dirección origen</th>
        <th>ID dirección destino</th>
        <th>ID pago total</th>
        <th>Fecha de registro</th>
        <th>Número de objetos pequeños</th>
        <th>Número de objetos medianos</th>
        <th>Número de objetos grandes</th>
        <th>Descripcion</th>
        <th>Costo del estacionamiento</th>
        <th>Acceso</th>
        <th>Tipo de vivienda</th>
        <th>Tipo de fragilidad</th>
        <th>Fecha para hacer la mudanzas</th>
        <th>CURP</th>
    </thead>
    <tbody>
        <?php foreach ($soli as $key): ?>
            <tr>
                <td><?=$key->idsolucitud?></td>
                <td><?=$key->idcliente?></td>
                <td><?=$key->idempleado?></td>
                <td><?=$key->idcamioneta?></td>
                <td><?=$key->idadministrador?></td>
                <td><?=$key->iddireccionorigen?></td>
                <td><?=$key->iddirecciondestino?></td>
                <td><?=$key->idpagototal?></td>
                <td><?=$key->fecha_registro?></td>
                <td><?=$key->num_objeto_pequenio?></td>
                <td><?=$key->num_objeto_mediano?></td>
                <td><?=$key->numero_objeto_grande?></td>
                <td><?=$key->descripcion_objeto?></td>
                <td><?=$key->costo_estacionamiento?></td>
                <td><?=$key->tipo_acceso?></td>
                <td><?=$key->tipo_vivienda?></td>
                <td><?=$key->tipo_fragilidad?></td>
                <td><?=$key->fecha_mudanza?></td>
                <td><?=$key->curp?></td>

                <td><a class="btn btn-success" href="<?=base_url('index.php/AdmEm/detalle/').$key->idempleado?>">Detalles</a></td>
                <td><a class="btn btn-warning" href="<?=base_url('index.php/AdmEm/EditarE/').$key->idempleado?>">Editar</a></td>
                <td><a class="btn btn-danger" href="<?=base_url('index.php/AdmEm/borrarE/').$key->idempleado?>">Borrar</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>