<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> ::Enviar solicitud:: </title>
    <style type="text/css">

h1
{
  margin-top: 100px;
  padding:0;
  font-family: Segoe UI;
  overflow-x: hidden;

}

h2
{
  background: white;
  color: red;
  border: 1px solid #000;
  margin-top: -50px;
  margin-right: 100px;
  margin-left: 100px;
  margin-bottom: 0px;
  padding: 60px 30px 40px 45px;
}

h3
{
  background: white;
  color: red;
  border: 1px solid #000;
  margin-top: 0px;
  margin-right: 100px;
  margin-left: 100px;
  margin-bottom: 0px;
  padding: 60px 30px 40px 45px;
}

h4
{
  background: white;
  color: red;
  border: 1px solid #000;
  margin-top: 0px;
  margin-right: 100px;
  margin-left: 100px;
  margin-bottom: 0px;
  padding: 60px 30px 40px 45px;
}

h5
{
  background: white;
  color: red;
  border: 1px solid #000;
  margin-top: 0px;
  margin-right: 100px;
  margin-left: 100px;
  margin-bottom: 0px;
  padding: 60px 30px 40px 45px;
}

h6
    {
      background: white;
      color: red;
      border: 1px solid #000;
      margin-top: 50px;
      margin-right: 100px;
      margin-left: 100px;
      margin-bottom: 0px;
      padding: 60px 30px 40px 45px;
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
            <p align="center"><FONT FACE="Segoe UI" SIZE="6"> Administra solicitud </FONT></p>  
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

  <div>
    <h2>
      <p color="red" align="center"><FONT FACE="Segoe UI" SIZE="3"> Solicitud de mudanza 01 
        <div align="right">
          <div class="col-4">
            <div class="mb-3">
                <label class="form-label">Fecha de registro: </label>
                    <input type="date" value="2022-12-01"  class="form-control" style="width : 200px; heigth : 200px">
              </div>
          </div>
        </div>
        </FONT>
      </p>
    </h2>
  </div> 

<div>
<h2>
  
<p color="red" align="center"><FONT FACE="Segoe UI" SIZE="3"> Datos del solicitante </FONT></p>

  <div class="container">
    <form>
      <div class="row">
     
          <div class="col-4">
              <div class="mb-3">
                   <label class="form-label"><FONT FACE="Segoe UI" SIZE="3"> Nombre(s): </FONT></label>
                   <input type="text" placeholder="Aldo Alfredo" class="form-control">
              </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Apellido Paterno: </FONT> </label>
                    <input type="text" placeholder="González"  class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Apellido Materno:  </FONT> </label>
                    <input type="text" placeholder="Amaro" class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Correo:  </FONT> </label>
                    <input type="text" placeholder="Ald003dke@gmail.com"  class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Celular: </FONT> </label>
                    <input type="text" placeholder="231-150-2758"  class="form-control">
               </div>
          </div>

          
          <div class="col-4">
              <div class="mb-3">
                  <label  class="form-kabel"> <FONT FACE="Segoe UI" SIZE="3"> Nacionalidad: </FONT> </label>
                   <select name="Nacionalidad" id="Nacionalidad">
                      <option value="M"> Mexicana  </option>
                      <option value="E">Europea</option>
                      <option value="C">Estadounidense</option>
                      <option value="O">Otro</option>
                  </select>
              </div>
          </div>
        

          <div class="col-4">
              <div class="mb-3">
                  <label style="width : 100px; heigth : 100px" class="form-kabel"> <FONT FACE="Segoe UI" SIZE="3"> Sexo: </FONT> </label>
                   <select name="Sexo" id="Sexo">
                      <option value="M"> Masculino  </option>
                      <option value="F"> Femenino </option>
                  </select>
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Teléfono fijo: </FONT> </label>
                   <input type="text" placeholder="231-313-3638"  class="form-control">
               </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Edad: </FONT> </label>
                  <input type="Number" value="21" class="form-control">
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Curp: </FONT> </label>
                  <input type="text" placeholder="GOAA011003HPLNMLA5"  class="form-control">
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Fecha de nacimiento: </FONT> </label>
                  <input type="date" value="2001-10-03"  class="form-control">
              </div>
          </div>
        </h2>
      </div>
    </div>
  </div>


<div>
<h3>
  
<p color="red" align="center"><FONT FACE="Segoe UI" SIZE="3"> Dirección origen </FONT></p> <br>

  <div class="container">
    <form>
      <div class="row">

      <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Pais: </FONT> </label>
                    <input type="text" placeholder="México"  class="form-control">
                </div>
          </div>
     
          <div class="col-4">
              <div class="mb-3">
                   <label class="form-label"><FONT FACE="Segoe UI" SIZE="3"> Estado: </FONT></label>
                   <input type="text" placeholder="Puebla"  class="form-control">
              </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Ciudad: </FONT> </label>
                    <input type="text" placeholder="Teziutlán"  class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Colonia:  </FONT> </label>
                    <input type="text" placeholder="Xoloco"  class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> CP:  </FONT> </label>
                    <input type="Number" value=73870 class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Calle: </FONT> </label>
                    <input type="text" placeholder="Hermemegildo Galeana" class="form-control">
               </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> No. Exterior: </FONT> </label>
                   <input type="text" placeholder="36-A"  class="form-control">
               </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> No. Interior: </FONT> </label>
                  <input type="text" placeholder="S/N"  class="form-control">
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label style="width : 100px; heigth : 100px" class="form-kabel"> <FONT FACE="Segoe UI" SIZE="3"> Tipo de acceso: </FONT> </label>
                   <select name="Acceso" id="Acceso">
                      <option value="E"> Estrecho  </option>
                      <option value="A"> Amplio </option>
                      <option value="R"> Restringido </option>
                      <option value="O">Otro </option>
                  </select>
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label style="width : 100px; heigth : 100px" class="form-kabel"> <FONT FACE="Segoe UI" SIZE="3"> Tipo de vivienda: </FONT> </label>
                   <select name="Vivienda" id="Vivienda">
                      <option value="C"> Casa propia  </option>
                      <option value="D"> Departamento </option>
                      <option value="V"> Vecindad </option>
                      <option value="O">Otro </option>
                  </select>
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Fecha de mudanza: </FONT> </label>
                  <input type="date" value="2022-12-01" class="form-control">
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Hora de salida: </FONT> </label>
                  <input type="time" value="15:00"  class="form-control">
              </div>
          </div>
        </h3>
      </div>
    </div>
  </div>

<div>
<h4>
  
<p color="red" align="center"><FONT FACE="Segoe UI" SIZE="3"> Dirección destino </FONT></p> <br>

  <div class="container">
    <form>
      <div class="row">

      <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Pais: </FONT> </label>
                  <input type="text" placeholder="México"  class="form-control">
              </div>
          </div>
     
          <div class="col-4">
              <div class="mb-3">
                   <label class="form-label"><FONT FACE="Segoe UI" SIZE="3"> Estado: </FONT></label>
                   <input type="text" placeholder="Puebla"  class="form-control">
              </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Ciudad: </FONT> </label>
                    <input type="text" placeholder="Teziutlán"  class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Colonia:  </FONT> </label>
                    <input type="text" placeholder="La Garita"  class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> CP:  </FONT> </label>
                    <input type="Number" placeholder="73890"  class="form-control">
                </div>
          </div>

          <div class="col-4">
                <div class="mb-3">
                    <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Calle: </FONT> </label>
                    <input type="text" placeholder="Hidalgo" class="form-control">
               </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> No. Exterior: </FONT> </label>
                   <input type="text" placeholder="64"  class="form-control">
               </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> No. Interior: </FONT> </label>
                  <input type="text" placeholder="S/N"  class="form-control">
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label style="width : 100px; heigth : 100px" class="form-kabel"> <FONT FACE="Segoe UI" SIZE="3"> Tipo de acceso: </FONT> </label>
                   <select name="Acceso" id="Acceso">
                      <option value="E"> Estrecho  </option>
                      <option value="A"> Amplio </option>
                      <option value="R"> Restringido </option>
                      <option value="O">Otro </option>
                  </select>
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label style="width : 100px; heigth : 100px" class="form-kabel"> <FONT FACE="Segoe UI" SIZE="3"> Tipo de vivienda: </FONT> </label>
                   <select name="Vivienda" id="Vivienda">
                      <option value="C"> Casa propia  </option>
                      <option value="D"> Departamento </option>
                      <option value="V"> Vecindad </option>
                      <option value="O">Otro </option>
                  </select>
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Fecha de mudanza: </FONT> </label>
                  <input type="date" value="2022-12-01" class="form-control">
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Hora de llegada: </FONT> </label>
                  <input type="time" value="16:30"  class="form-control">
              </div>
          </div>
        </h4>
      </div>
    </div>
  </div>

  <div>
    <h5>

      <p color="red" align="center"><FONT FACE="Segoe UI" SIZE="3"> Mudanza </FONT></p> <br>

      <div align="center">
      <a style="background-color:white; color:red; height: 70px; width : 1050px;" class="btn btn-dark" type="button" href="<?=base_url('index.php/EnviarSolicitudC/AgregarHabitaciones/')?>">
          <p style="margin-top: 15px;"> Habitaciones + </p>
      </a> 
      </div> 

      <div>
        <h6>
          <p align="center"><FONT FACE="Segoe UI" FONT SIZE="3"> Habitacion 01 </FONT></p>  
        </h6>
      </div>

      <div align="right" style= "padding:0px 100px 10px 15px">
          <a style=" height:35px; background-color:white; color:black ;" class="btn btn-dark" type="button" href="<?=base_url('index.php/EnviarSolicitudC/EditarHabitacion/')?>">
             <p style="margin-top: 0px; color:red"> Editar </p> 
          </a> 
      </div>

    </h5>
  </div>

  <div align="center">
    <h5>
      <p color="red" align="center"><FONT FACE="Segoe UI" SIZE="3"> Costos </FONT></p> <br>

      <div class="container">
       <form>
        <div class="row">

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Costo de estacionamiento: </FONT> </label>
                  <input type="text" placeholder="$50" class="form-control">
              </div>
          </div>

          <div class="col-4">
              <div class="mb-3">
                  <label class="form-label"> <FONT FACE="Segoe UI" SIZE="3"> Pago total: </FONT> </label>
                  <input align="right" placeholder="$530" type="text" class="form-control" style="padding:0px 100px 10px 15px">
              </div>
          </div>

        </div>
      </div>
    </h5>
  </div>
  
  <div align="center">
    <h5>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <a style="background-color:rgb(243, 220, 224); color:red" class="btn btn-dark" type="button" href="<?=base_url('index.php/EnviarSolicitudC/AdminSolicitud/')?>">
                     Guardar
                 </a>
             </div>
        </div>

        <div class="col-6">
             <div class="mb-3">
            <a style="background-color:rgb(243, 220, 224); color:red" class="btn btn-dark" type="button" href="<?=base_url('index.php/EnviarSolicitudC/AdminSolicitud/')?>">
                     Cancelar
                </a>
             </div>
         </div>
    </h5>
  </div> <br>          

</body>
</html>