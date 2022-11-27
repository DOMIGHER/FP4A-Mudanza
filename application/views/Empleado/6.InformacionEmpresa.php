<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> Informacion de la empresa </title>

    <style type="text/css">

    h4{
    background: rgb(243, 220, 224);
    color: red;
    border: 1px solid #000;
    text-align: justify;
    font-size: 14px;
    margin-top: -60px;
    margin-right: 100px;
    margin-left: 100px;
    margin-bottom: -200px;
    padding: 10px 20px 40px 45px;
    letter-spacing: 2px; 
    }

    img{
      width:600px;
      height:100px;
      margin-top: 50PX;
      margin-right: 50px;
      margin-left: 50px;
      margin-bottom: 50px;
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
            <p align="center"><FONT FACE="Segoe UI" SIZE="6"> Información de la empresa </FONT></p>  
        </h6>
      </div>
    </div>
  </nav>

  <div>
        <h3>
          <input type="checkbox" name="">
          <span class="icon"></span>
            <ul><br>
            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Emp_cuenta/show/')?>">Administrar cuenta</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Emp_Soli/show/')?>">Administrar solicitud</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Emp_Repor/show/')?>">Administrar reporte</a></li><br>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Emp_InfoE/show/')?>">Informacion de la empresa</a></li>
              <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/Emp_usu/login/')?>">Cerrar sesion</a></li>
        </h3>
    </div>

  <div>
        <h4><center> <FONT FACE="verdana" size="4"> <strong> Fletes y mudanzas "San Mateo" </strong> </FONT> <br>
        
        <img src="https://mudandote.mx/wp-content/uploads/2021/11/Mudanza.jpg.webp"  width="700px" height="100px"><br></center> 

         <FONT FACE="verdana" size="4"><strong> 
          La empresa de fletes y mudanzas "San Mateo", es una empresa que se ha dedicado al servicio de fletes y mudanzas desde el año 1997.
          A lo largo de su trayectoria, ha hecho posible que miles de personas en teziutlán puedan realizar el transporte de sus pertenencias
          de forma segura y optima, la empresa en cuestion se distingue principalmente de otras de su estilo en el compromiso que la ha distinguido
          por años.
           </strong></FONT></center>  
    </h4>

    </div>

</body>
</html>