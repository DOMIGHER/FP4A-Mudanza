<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> ::Administrar reporte:: </title>

    <style type="text/css">

    h4
    {
    background: rgb(243, 220, 224);
    color: red;
    border: 1px solid #000;
    margin-top: 50px;
    margin-right: 100px;
    margin-left: 100px;
    margin-bottom: 0px;
    padding: 60px 30px 40px 45px;

    }

    h5
    {
      background: white;
      color: black;
      border: 1px solid #000;
      margin-top: 50px;
      margin-right: 100px;
      margin-left: 100px;
      margin-bottom: 0px;
      padding: 60px 30px 40px 45px;
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
svg
{
  margin-left: 1250px;
  margin-top: 3px;
  margin-bottom: 3px;
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
            <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra reporte </FONT></p>  
        </h6>
      </div>
    </div>
  </nav>

  <div>
        <h3>
          <input type="checkbox" name="">
          <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
          <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
          </svg>
          </span>
            <ul><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/ModificarCuentaC/show/')?>">Administrar cuenta</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarSolicitudC/show/')?>">Administrar solicitud</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarReporteC/show/')?>">Administrar reporte</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/InformacionEmpresaC/show/')?>">Informacion de la empresa</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Usuario/login/')?>">Cerrar sesion</a></li>
            </ul>
        </h3>
    </div>

  <div style= "margin-top: -90px;">
    <h4> 
       <div class="col-4">
          <div class="mb-3">
          <input type="text" readonly=»readonly» placeholder="Número de solicitudes: 1" class="form-control"> </input>
          </div>
       </div>

        <div class="col-4">
          <div class="mb-3">
             <input type="text" readonly=»readonly» placeholder="Gastos totales: $360"  class="form-control">
         </div>
        </div>

        <div class="col-4">
          <div class="mb-3">
              <input type="text" readonly=»readonly» placeholder="Número de reportes: 1"  class="form-control">
          </div>
        </div> <br>
    </h4>
  </div>

  <div>
    <h5>
      <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Solicitud 01 </FONT></p>  
    </h5>
  </div>

  <div align="right" style= "padding:0px 100px 10px 15px">
    <div class="btn-group" role="group" aria-label="Basic outlined example">
    <a style="background-color:white; color:black;" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarReporteC/ConsultarReporte/')?>">
                 Consultar reporte
      </a> 
    <a style="background-color:white; color:black;" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdministrarReporteC/Borrar/')?>">
                 Eliminar reporte
       </a> 
  </div></div>

</body>
</html>