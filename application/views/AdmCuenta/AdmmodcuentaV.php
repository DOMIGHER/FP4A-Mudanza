<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar cuenta de usuario</title>
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

  <form action="<? ?>" method="POST">

    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre"  value="<?=$administrador[0]->nombre?>">

    <label for="exampleInputEmail1" class="form-label">Apellido paterno:</label>
    <input type="text" class="form-control" name="apellido_paterno"  value="<?=$administrador[0]->apellido_paterno?>">

    <label for="exampleInputEmail1" class="form-label">Apellido materno:</label>
    <input type="text" class="form-control" name="apellido_materno"  value="<?=$administrador[0]->apellido_materno?>">

    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="correo"  value="<?=$administrador[0]->correo?>">

    <label for="exampleInputEmail1" class="form-label">Celular</label>
    <input type="tel" class="form-control" name="celular"  value="<?=$administrador[0]->celular?>">

    <label class="form-label">Telefono Fijo: </label>
    <input type="tel" class="form-control" name="telefono_fijo"  value="<?=$administrador[0]->telefono_fijo?>">

    <label for="exampleInputEmail1" class="form-label">Nacionanlidad</label><br>
    <select class="form-select" name="nacionalidad" value="<?=$administrador[0]->nacionalidad?>">
    <option selected> </option>
    </select>

    <label for="exampleInputEmail1" class="form-label">Sexo</label><br>
    <select class="form-select" name="sexo" value="<?=$administrador[0]->sexo?>">
    <option selected> </option>
    </select>

    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label><br>
    <input type="date" class="form-control" name="fecha_nacimiento"  value="<?=$administrador[0]->fecha_nacimiento?>">

    </form>

</div>
</div>


</body>
</html>