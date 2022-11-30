
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

    

      <div>
            <h3>
            <input type="checkbox" name="">
            <span class="icon">
           </svg>
            </span>
            <ul><br>
            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmcuentaC/showcuenta/')?>">Administrar Cuenta</a></li><br>

            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmsolicitudC/verSolicitud/')?>">Administrar Solicitud</a></li>
            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmreporteC/show/')?>">Administrar Reportes</a></li>
            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmEm/show/')?>">Administra Empleado</a></li>  
            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmCam/show/')?>">Administra Camioneta</a></li>
            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmcostosC/Showpagototal/')?>">Administra Costos</a></li><br>

            <li><a style=" width : 290px; background-color:white; color:black" class="btn btn-dark" type="button" href="<?=base_url('index.php/AdmInfoempresaC/verinformacionempresa/')?>">Informacion de la empresa</a></li><br>
              
              </ul>
          </h3>
        </div> 