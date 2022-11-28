<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <style>

h6
{
margin-left:500px;
}

    h3
{
  margin-top: 100px;
  padding:0;
  font-family: Segoe UI;
  overflow-x: hidden;
}

input[type="checkbox"]
{
    position: fixed;
    right: 1170px;
    top: 20px;
    width: 50px;
    height: 50px;
    z-index: 100000;
    cursor: pointer;
    opacity: 0;
}
.icon
{
    position: fixed;
    right: 1170px;
    top:10px;
    width: 50px;
    height: 50px;
    z-index: 100001;
    background: #fff;
    border: 1px solid #161515;
    pointer-events: none;
}
.icon::before
{
    content: '≡';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    color: #000;
    text-align: center;
    line-height: 35px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 65px;
}
input[type="checkbox"]:checked ~ .icon::before
{
    content: '≡';
}
ul
{
    position: fixed;
    top: 0;
    left: 0;
    margin-top:77px;
    margin-bottom: 100px;
    padding: 0;
    box-sizing: border-box;
    width: 300px;
    height: 100vh;
    background: #A6C8AF;
    transition: 0.5s;
    z-index:100000;
    overflow-y:auto;
}
input[type="checkbox"]:checked ~ ul
{
    left: -300px;
}
ul li
{
    list-style:none;
}
ul li a
{
    display: block;
    color: #fff;
    padding: 10px;
    box-sizing: border-box;
    text-decoration: none;
    font-size: 24px;
    font-weight: 700;
    transition: 0.5s;
}
ul li a:hover
{
    transform: translateX(10px);
    color: #ff0;
}
svg
{
  margin-left: 1150px;
  margin-top: 3px;
  margin-bottom: 3px;
}

</style>

<div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h6 style="color:black;">  
                <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra Empleado </FONT></p>  
            </h6>
          </div>
        </div>
      </nav>

      <div>
            <h3>
            <input type="checkbox" name="">
            <span class="icon">
           </svg>
            </span>
            <ul><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmCam/show/')?>">Administrar Camioneta</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmEm/show/')?>">Administrar empleado</a></li>
              </ul>
          </h3>
        </div>

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
                <td><a class="btn btn-warning" href="<?=base_url('index.php/AdmEm/EditarE/').$key->idempleado?>">Editar</a></td>
                <td><a class="btn btn-danger" href="<?=base_url('index.php/AdmEm/borrarE/').$key->idempleado?>">Borrar</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</html>