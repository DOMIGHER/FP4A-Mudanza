<?php 

class AdmcuentaC extends CI_Controller{

    public function verCuenta(){
        

    }

    public function ModCuenta(){
        $this->load->model('AdmCuentaM');
        $data['administrador'] = $this->AdmCuentaM->getCuenta();

        $this->load->view('AdmCuenta/AdmvercuentaV.php', $data);

    }




}
?>