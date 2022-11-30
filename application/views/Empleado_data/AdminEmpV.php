<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <h6 style="color:black;">
                    <p align="center">
                        <FONT FACE="Segoe UI" FONT SIZE="6"> Detalles de los empleado </FONT>
                    </p>
                </h6>
            </div>
    </div>
    </nav>

 

    <div class="container">

        <table class="table table-striped table-bordered">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo electronico</th>

                <th>Editar cuenta</th>
            </thead>
            <tbody>
                <?php foreach ($informacion as $key) : ?>
                    <tr>
                        <td><?= $key->idempleado ?></td>
                        <td><?= $key->nombre ?></td>
                        <td><?= $key->apellido_paterno ?></td>
                        <td><?= $key->apellido_materno ?></td>
                        <td><?= $key->correo ?></td>


                        <td><a class="btn btn-warning" href="<?= base_url('index.php/Empleado_datos/EditarE/') . $key->idempleado ?>">Editar</a></td>
                   </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    </div>

</html>