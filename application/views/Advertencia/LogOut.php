<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> Bye Bye </title>

    <style>

    img {
      width: 250px;
      height: 150px;
      margin-top: -94px;
      margin-left: -150px;
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

h1
{
  margin-top: 10px;
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
            <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Eliminar cuenta </FONT></p>  
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
    <img src="data:image/jpeg;base64,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" width="250" height="150">
  </div>
  
<h1 align= "center"> ¿Esta seguro de que desea eliminar su cuenta? <h1>

<div class="d-grid gap-2 col-6 mx-auto  align-items-center vh-100">
<a style="background-color:black; color:white; margin-top:20px;" class="btn btn-dark" type="button" href="<?=base_url('index.php/Usuario/login/')?>">
    Eliminar cuenta
</a>
<div>
    

</body>
</html>