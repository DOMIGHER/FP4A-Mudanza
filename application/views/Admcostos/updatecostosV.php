<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar costos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
    
 </div>
    <div class="container">
    <?php echo validation_errors(); ?>
        <form action="<?=base_url('index.php/AdmcostosC/updatecostos/').$costos[0]->idpagototal ?>" method="POST">


            <label>Id pago total: </label> 
            <input type="text" class="form-control" name="idpagototal" value="<?=$costos[0]->idpagototal?>">

            <label>Pago caseta: </label>
            <input type="number" class="form-control" min="1" name="pago_caseta" value="<?=$costos[0]->pago_caseta ?>">

            <label>Pago gasolina: </label>
            <input type="number" class="form-control" min="1" name="pago_gasolina" value="<?=$costos[0]->pago_gasolina ?>">

            <label>Pago trasporte: </label>
            <input type="number" class="form-control" min="1" name="pago_trasporte" value="<?=$costos[0]->pago_trasporte ?>">

            <label>Pago empleado: </label>
            <input type="number" class="form-control" min="1" name="pago_empleado" value="<?=$costos[0]->pago_empleado ?>">

            <label>Pago objeto pequeño: </label>
            <input type="number" class="form-control" min="1" name="pago_objeto_pequeno" value="<?=$costos[0]->pago_objeto_pequeno ?>">

            <label>Pago objeto mediano: </label>
            <input type="number" class="form-control" min="1" name="pago_objeto_mediano" value="<?=$costos[0]->pago_objeto_mediano ?>">
            
            <label>Pago objeto grande: </label>
            <input type="number" class="form-control" min="1" name="pago_objeto_grande" value="<?=$costos[0]->pago_objeto_grande ?>">

            <label>Pago total: </label>
            <input type="number" class="form-control" min="1" name="pago_total" value="<?=$costos[0]->pago_total ?>">

            <input class="btn btn-success" type="submit" value="Actualizar">

        </form>
    </div>











 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>