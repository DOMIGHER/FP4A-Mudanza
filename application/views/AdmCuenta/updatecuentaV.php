<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div clas="container">

    <?php echo validation_errors(); ?>
        <form action="<?=base_url('index.php/AdmcuentaC/updatecuenta/').$administrador[0]->idadministrador ?>" method="POST">

            <lavel>Nombre</lavel>
            <input type="text" class="form-control" name="Nombre"  value="<?=$administrador[0]->nombre?>"> 
            <lavel>Apellido paterno:</lavel>
            <input type="text" class="form-control" name="apellido_paterno" value="<?=$administrador[0]->apellido_paterno?>"> 
            <lavel>Apellido materno:</lavel>
            <input type="text" class="form-control" name="apellido_materno" value="<?=$administrador[0]->apellido_materno?>"> 
            <lavel>Celular</lavel>
            <input type="text" class="form-control" name="celular" value="<?=$administrador[0]->celular?>"> 
    
            <input type="submit" value="Actualizar">

        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>