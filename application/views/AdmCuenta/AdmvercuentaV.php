<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver cuenta de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
  <div class="card-body">
    <h4>Administra cuenta</h3>
  </div>
</div>


<div class="container">
  <div class="row mt-4">
    <div class="col"-></div>
    <div class="col-6"></div>

    <?php foreach ($administrador as $key): ?>

      <form>
      <label class="form-label">Nombre: </label>
      <td><?=$key->nombre?></td><br>
      
    <label class="form-label">Apellido paterno:</label>
    <td><?=$key->apellido_paterno?></td><br>

    <label class="form-label">Apellido materno:</label>
    <td><?=$key->apellido_materno?></td><br>

    <label class="form-label">Email: </label>
    <td><?=$key->correo?></td><br>

    <label class="form-label">Celular: </label>
    <td><?=$key->celular?></td><br>
    
    <label class="form-label">Telefono Fijo: </label>
    <td><?=$key->telefono_fijo?></td><br>

    <label class="form-label">Nacionanlidad: </label>
    <td><?=$key->nacionalidad?></td><br>
   
    <label class="form-label">Sexo: </label>
    <td><?=$key->sexo?></td><br>

    <label class="form-label">Fecha de nacimiento: </label>
    <td><?=$key->fecha_nacimiento?></td><br>


      </form>

      <td><a class="btn btn-danger" href="<?=base_url
      ('index.php/AdmcuentaC/ModCuenta')?>"
      > Editar </a></td>
    
        <?php endforeach ?>






        <!--

  <div class="container">
  <div class="row mt-4">
    <div class="col"-></div>
    <div class="col-6"></div>

<form>
<label class="form-label">Nombre</label>
<input type="text" class="form-control" id="Nombreadm1" data-bs-toggle="$key->nombre?" name='nombre'>

<label class="form-label">Apellido paterno:</label>
<input type="text" class="form-control" id="Apellidopatadm1" aria-describedby="emailHelp">

<label class="form-label">Apellido materno:</label>
<input type="text" class="form-control" id="Apellidomatadm1" aria-describedby="emailHelp">

<label class="form-label">Email</label>
<input type="email" class="form-control" id="Emailladm1" aria-describedby="emailHelp">

<label class="form-label">Celular</label>
<input type="tel" class="form-control" id="CelularAdm1" aria-describedby="emailHelp">

<label class="form-label">Telefono fijo</label>
<input type="tel" class="form-control" id="Telefonofijo1" aria-describedby="emailHelp">

<label class="form-label">Nacionanlidad</label>
<input type="text" class="form-control" id="Nacionalidad1" aria-describedby="emailHelp">

<label class="form-label">Sexo</label>
<input type="text" class="form-control" id="Sexo1" aria-describedby="emailHelp">

<label class="form-label">Fecha de nacimiento</label><br>
<input type="text" class="form-control" id="Fechanacimiento1" aria-describedby="emailHelp">
</form>
     

<?php foreach ($administrador as $key): ?>
          <?=$key->nombre?>
          <?=$key->apellido_paterno?>
          <?=$key->apellido_materno?>
          <?=$key->correo?>
          <?=$key->contrasenia?>
          <?=$key->nacionalidad?>
          <?=$key->sexo?>
          <?=$key->fecha_nacimiento?>
          <?=$key->celular?>
          <?=$key->telefono_fijo?>
          <?php endforeach ?>



         -->

          
     


    
    <div class="col"></div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>