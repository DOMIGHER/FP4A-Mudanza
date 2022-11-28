<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incertar costos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1>Administrar costos</h1>
    <h1>------------------------------------------------------------ </h1>
 </div>
    <div class="container">
    <?php echo validation_errors(); ?>
        <form action="<?=base_url('index.php/AdmcostosC/incertarcostos')?>" method="POST">

            <label>Pago caseta: </label>
            <input type="number" class="form-control" min="1" nombre="pago_caseta">

            <label>Pago gasolina: </label>
            <input type="number" class="form-control" min="1" nombre="pago_gasolina">

            <label>Pago trasporte: </label>
            <input type="number" class="form-control" min="1" nombre="pago_trasporte">

            <label>Pago empleado: </label>
            <input type="number" class="form-control" min="1" nombre="pago_empleado">

            <label>Pago objeto pequeño: </label>
            <input type="number" class="form-control" min="1" nombre="pago_objeto_pequeno">

            <label>Pago objeto mediano: </label>
            <input type="number" class="form-control" min="1" nombre="pago_objeto_mediano">
            
            <label>Pago objeto grande: </label>
            <input type="number" class="form-control" min="1" nombre="pago_objeto_grande">

            <input class="btn btn-success" type="submit" >

        </form>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>