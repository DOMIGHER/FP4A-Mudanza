<?php 

class AdmreporteC extends CI_Controller{

    public function show(){

        $this->load->view('Admreportes/AdmverreportesV.php');
        $this->load->view('vistamenu/menuV.php');
    }


}?>
