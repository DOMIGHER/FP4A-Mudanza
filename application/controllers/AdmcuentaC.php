<?php 

class AdmcuentaC extends CI_Controller{

    public function verCuenta(){
        $this->load->view('AdmCuenta/AdmvercuentaV.php');

    }

    public function ModCuenta(){
        print"Modificar cuenta";

    }




}
?>