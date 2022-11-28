<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver costos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Administrar costos</h1>
    <h1>------------------------------------------------------------ </h1>
<div class="container">
    <a class="btn btn-success" href="<?=base_url('index.php/AdmcostosC/incertarcostos/')?>">Insertar Costos</a>
    
    
    <div>
        <table class="table table-stripted table-bordered">
            <thead>
                <th>IdCostos</th>
                <th>Pago total</th>
                <th>Editar costos</th>
                <th>Eliminar costo</th>
            </thead>
            <tbody>
            <?php foreach ($costo as $key):?>
                   <tr>
                   <td><?=$key->idpagototal ?></td>
                    <td><?=$key->pago_total?></td>
                    <td><a class="btn btn-success" href="<?=base_url('index.php/AdmcostosC/detallecostos/').$key->idpagototal?>">Consultar costo</a></td>
                    <td><a class="btn btn-danger" href="<?=base_url('index.php/AdmcostosC/borrarcostos/').$key->idpagototal?>">Eliminar costo</a></td>
                   </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>