<?php 

class AdmcuentaC extends CI_Controller{

    public function verCuenta(){
        $this->load->model('AdmCuentaM');
        $data['administrador'] = $this->AdmCuentaM->getCuenta();

        $this->load->view('AdmCuenta/AdmvercuentaV.php', $data);


    }

    public function ModCuenta(){
        $this->load->model('AdmCuentaM');
        $data['administrador'] = $this->AdmCuentaM->modificaCuenta($idadministrador);

        $this->load->view('AdmCuenta/AdmmodcuentaV.php', $data);
        
    }




}
?>