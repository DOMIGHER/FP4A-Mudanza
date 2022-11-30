<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar informacion de la empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<div class="container">
<?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/AdmInfoempresaC/updateinfoempresas/').$infocuenta[0]->Idinfoempresa ?>" method="POST">

    <lavel>Descripcion: </lavel>
    <input type="text" class="form-control" name="descripcion" value="<?=$infocuenta[0]->descripcion?>"> 
    <input type="submit" value="Actualizar">

</form>
</div>
    
</body>
</html>