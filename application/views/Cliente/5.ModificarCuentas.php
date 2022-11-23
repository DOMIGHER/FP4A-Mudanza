<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> :: Modificar cuenta :: </title>

    <style type="text/css">

    img
     {
      width: 140px;
      height: 120px;
      margin-top: -200px;
      margin-left: -540px;
      left: 50%;
      top: 50%;
      position: absolute;
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
    right: 1270px;
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
    right: 1270px;
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
    margin-top:70px;
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
}


   </style>

</head>
<body>
  
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <div class="container" style="text-align:center;">
        <h6 style="color:black;">
            <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra cuenta </FONT></p>  
        </h6>
      </div>
    </div>
  </nav>

  <div>
        <h3>
          <input type="checkbox" name="">
          <span class="icon"></span>
            <ul><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/ModificarCuentaC/show/')?>">Administrar cuenta</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarSolicitudC/show/')?>">Administrar solicitud</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarReporteC/show/')?>">Administrar reporte</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/InformacionEmpresaC/show/')?>">Informacion de la empresa</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Usuario/login/')?>">Cerrar sesion</a></li>
            </ul>
        </h3>
      </div>

  <div>
    <img src="https://cdn.pixabay.com/photo/2021/07/02/04/48/user-6380868_960_720.png" width="210" height="180">
        <div style="margin-left: 125px; margin-top: 85px;">
         <label for="avatar"></label>
        <input type="file" name="avatar" id="avatar"> 
        </div> 
  </div>


<div class="container">
<?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/ModificarCuentaC/modify/') ?>" method="POST">

<div class="column" align="center" style="margin-top:-190px;">

<div class="col-4">
    <div class="mb-3">
        <label class="form-label" style= "color:red"> Nombre(s): </label>
         <input type="text" class="form-control" name="Nombre(s)">
     </div>
</div><br>

<div class="col-4">
    <div class="mb-3">
         <label class="form-label" style= "color:red">Apellido paterno: </label>
         <input type="text" class="form-control">
     </div>
</div>

<div class="col-4">
    <div class="mb-3">
        <label class="form-label" style= "color:red">Apellido materno: </label>
        <input type="text" class="form-control">
    </div>
</div>

<div class="col-4">
    <div class="mb-3">
        <label class="form-label" style= "color:red">Correo eléctronico: </label>
        <input type="text" class="form-control">
    </div>
</div>

<div class="col-4">
    <div class="mb-3">
        <label class="form-label" style= "color:red">Celular: </label>
        <input type="text" class="form-control">
    </div>
</div>

<div class="col-4">
    <div class="mb-3">
         <label class="form-kabel" style= "color:red">País: </label>
         <select name="pais" id="pais">
             <option value="M">México </option>
             <option value="F">Francia</option>
             <option value="C">Colombia</option>
             <option value="G">Grecia</option>
             <option value="L">Londres</option>
             <option value="S">Suecia</option>
             <option value="O">Otro</option>
         </select>
     </div>
</div>

<div class="col-4">
    <div class="mb-3">
         <label class="form-kabel" style= "color:red">Sexo: </label>
         <select name="sexo" id="sexo">
             <option value="M">Masculino </option>
             <option value="F">Femenino</option>
             <option value="O">Otro</option>
         </select>
     </div>
</div>

<div class="col-4">
    <div class="mb-3">
        <label class="form-label" style= "color:red">Fecha de nacimiento: </label>
        <input type="date" class="form-control">
    </div>
</div>

<br>
<br>
<br>
<br>



<div class="row">
    <div class="col-6">
        <div class="mb-3">
             <a style="background-color:white; color:red" class="btn btn-dark" type="button" href="<?=base_url('index.php/ModificarCuentaC/show/')?>">
                 Guardar
            </a>
         </div>
     </div>

    <div class="col-6">
        <div class="mb-3">
        <a style="background-color:white; color:red" class="btn btn-dark" type="button" href="<?=base_url('index.php/ModificarCuentaC/show/')?>">
                 Cancelar
             </a>
         </div>
     </div>
</form>
  
</body>
</html>