<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> Finish </title>

    <style>

    img {
      width: 250px;
      height: 150px;
      margin-top: -220px;
      margin-left: -150px;
      left: 50%;
      top: 50%;
      position: absolute;
    }

    h1
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
            <p align="center"><FONT FACE="Segoe UI" SIZE="6"> Borrar reporte </FONT></p>  
      </div>
    </div>
  </nav>

  <div>
        <h1>
        <input type="checkbox" name="">
        <span class="icon"></span>
            <ul><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/ModificarCuentaC/show/')?>">Administrar cuenta</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarSolicitudC/show/')?>">Administrar solicitud</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarReporteC/show/')?>">Administrar reporte</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/InformacionEmpresaC/show/')?>">Informacion de la empresa</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Usuario/login/')?>">Cerrar sesion</a></li>
            </ul>
        </h1>
      </div>

  
  
<h1 align= "center"> ¿Desea eliminar este reporte? <h1>

<div class="d-grid gap-2 col-6 mx-auto  align-items-center vh-100">
<a style="background-color:black; color:white; margin-top:-290px;" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarReporteC/news/')?>">
    Eliminar reporte
</a>
<div>
    

</body>
</html>