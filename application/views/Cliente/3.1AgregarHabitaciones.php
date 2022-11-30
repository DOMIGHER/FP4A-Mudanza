<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> ::Agregar habitacion:: </title>

    <style type="text/css">

    hr{
      color: black;
      border: 1px solid #000;
      height:10px;
      width:100px;
      margin-top: 10px;
      margin-right: 30px;
      margin-left: 30px;
      margin-bottom: 10px;
      padding: 0px 0px 0px 0px;
    }

    h5
{
  background: white;
  color: red;
  border: 1px solid #000;
  margin-top: 0px;
  margin-right: 300px;
  margin-left: 300px;
  margin-bottom: 0px;
  padding: 0px 0px 0px 0px;
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
            <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra Solicitud </FONT></p>  
        </h6>
      </div>
    </div>
  </nav>
  
<div>
  <h5>

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
  
<div class="container">
<div class="column" align="center">

<p align="center" style= "margin-top: -80px; color:red"> Habitación </p><br>

<div class="col-4">
    <div class="mb-3">
         <label class="form-kabel" style= "color:red">Clasificacion de objeto: </label>
         <select name="objeto" id="objeto">
             <option value="E">Explosivos </option>
             <option value="F">Fragiles</option>
             <option value="C">Corrosivos</option>
             <option value="G">Gases</option>
             <option value="LI">Liquidos inflamables</option>
             <option value="SI">Solidos inflamables</option>
             <option value="O">Otro</option>
         </select>
     </div>
</div>

<div class="col-4">
    <div class="mb-3">
        <label class="form-label" style= "color:red">Número de objetos pequeños: </label>
         <input type="text" class="form-control">
     </div>
</div>

<div class="col-4">
    <div class="mb-3">
         <label class="form-label" style= "color:red">Número de objetos medianos: </label>
         <input type="text" class="form-control">
     </div>
</div>

<div class="col-4">
    <div class="mb-3">
        <label class="form-label" style= "color:red">Número de objetos grandes: </label>
        <input type="text" class="form-control">
    </div>
</div>


</h5>
</div>

<div align="center">
  <h5>
<br>
<p style="margin-left:-500px; margin-top:100px; color:black; font-size:60px;"> + </p>

                <div align="center">
                  <a href="https://www.google.com/search?q=imagenes+de+habitaciones&sxsrf=ALiCzsZTHAbX5m00RJAvAQmfd3PWgW4TRQ:1668883407287&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi8u6aV87r7AhWzJ0QIHVYrCDUQ_AUoAXoECAMQAw"><img src="https://www.hoteljulimar.com/wp-content/uploads/2021/03/Habitacion-Matrimonio.jpg"  width="300px" height="250px" style="margin-top:-185px;" title="made at imgflip.com"/></a>
                </div>
 <br>
   </h5>
</div>

<div align="center">
  <h5> <br>
                        <div class= "container">
                          <p style= "color:red" width="600px">Descripción de los objetos: </p>
                                <textarea type="text" class="input" v-model="newItem" @servicios,web="addItem()"></textarea>
                            </div> <br>
                          
   </h5>
</div>

<div align="center">
  <h5> <br>
                    <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <a style="background-color:rgb(243, 220, 224); color:red" class="btn btn-dark" type="button" href="<?=base_url('index.php/AgregarHabitacionC/CrearSolicitud/')?>">
                                        Guardar
                                    </a>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                <a style="background-color:white; color:red" class="btn btn-dark" type="button" href="<?=base_url('index.php/AgregarHabitacionC/CrearSolicitud/')?>">
                                        Cancelar
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </h5>
</div> 
         
</body>
</html>