<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver informacion de la empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        .contenedor{

          text-align: justify;
    width: 90%;
    height: 400px;
    margin-left: 5%;
    margin-right: 5%;
    border: 1px solid #f00;
    
}
    </style>

</head>
<body>






<div class="container">

<nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h6 style="color:black;">  
                <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6">Información de la empresa</FONT></p>  
            </h6>
          </div>
      </nav>

      <h3 class="center">Fletes y mudanzas San Mateo</h3>
<div class="container">

<?php foreach ($infoempresa as $key): ?>
<p class="contenedor" > <?=$key->descripcion?> </p>
  <a class="btn btn-success" href="<?=base_url('index.php/AdmInfoempresaC/updateinfoempresas/').$key->Idinfoempresa?>"> Editar informacion</a>
  <?php endforeach ?>

  </div>
</div>





    
</body>
</html>