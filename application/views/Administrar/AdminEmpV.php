<div class="container">

    <div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-success" href="<?=base_url('index.php/AdmEm/insertE')?>">Agregar Empleado</a>
    </div>
    
<table class="table table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo electronico</th>
        <th>Nacionalidad</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>numero de licencia</th>
        <th>rfc</th>
        <th>antecedentes penales</th>
        <th>telefono fijo</th>
        <th>celular</th>
        <th>Operaciones</th>
    </thead>
    <tbody>
        <?php foreach ($informacion as $key): ?>
            <tr>
                <td><?=$key->idempleado?></td>
                <td><?=$key->nombre?></td>
                <td><?=$key->apellido_paterno?></td>
                <td><?=$key->apellido_materno?></td>
                <td><?=$key->correo?></td>
                <td><?=$key->nacionalidad?></td>
                <td><?=$key->sexo?></td>
                <td><?=$key->fecha_nacimiento?></td>
                <td><?=$key->num_licencia?></td>
                <td><?=$key->rfc?></td>
                <td><?=$key->antecedentes_penales?></td>
                <td><?=$key->telefono_fijo?></td>
                <td><?=$key->celular?></td>

                <td><a class="btn btn-success" href="<?=base_url('index.php/AdmEm/detalle/').$key->idempleado?>">Detalles</a></td>
                <td><a class="btn btn-danger" href="<?=base_url('index.php/AdmEm/borrarE/').$key->idempleado?>">Borrar</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>