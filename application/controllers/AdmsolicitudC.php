
<?php 

class AdmsolicitudC extends CI_Controller{

    public function verSolicitud(){
        
        $this->load->view('AdmsolicitudesV/Admversolicitudes.php');
        $this->load->view('vistamenu/menuV.php');
    }


}
?>