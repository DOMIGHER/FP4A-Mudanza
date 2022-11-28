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
                <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra Camioneta </FONT></p>  
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
    <a class="btn btn-success" href="<?=base_url('index.php/AdmCam/insertC')?>">Agregar Camioneta</a>
    </div>
    
    


<table class="table table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Modelo</th>
        <th>Fecha de compra</th>
        <th>Peso de carga</th>
        <th>Pais de origen</th>
        <th>Tipo de vehiculo</th>
    </thead>
    <tbody>
        <?php foreach ($camioneta as $key): ?>
            <tr>
                <td><?=$key->idcamioneta?></td>
                <td><?=$key->modelo?></td>
                <td><?=$key->fecha_compra?></td>
                <td><?=$key->peso_carga?></td>
                <td><?=$key->pais_de_origen?></td>
                <td><?=$key->clase_vehiculo?></td>

                <td><a class="btn btn-success" href="<?=base_url('index.php/AdmCam/detalleC/').$key->idcamioneta?>">Detalles</a></td>
                <td><a class="btn btn-warning" href="<?=base_url('index.php/AdmCam/EditarC/').$key->idcamioneta?>">Editar</a></td>
                <td><a class="btn btn-danger" href="<?=base_url('index.php/AdmCam/borrarC/').$key->idcamioneta?>">Borrar</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</html>