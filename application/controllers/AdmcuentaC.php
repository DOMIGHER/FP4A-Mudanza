<?php 

class AdmcuentaC extends CI_Controller{

    public function showcuenta(){
        $this->load->model('AdmCuentaM');
        $data['administrador'] = $this->AdmCuentaM->getcuenta();

        $this->load->view('AdmCuenta/AdmvercuentaV.php',$data);

    }


    public function updatecuenta($idadministrador){
        $this->load->model('AdmCuentaM');
        $data['administrador'] = $this->AdmCuentaM->detallecuenta($idadministrador);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        if($this->form_validation->run() == FALSE){
            $this->load->view('AdmCuenta/updatecuentaV.php',$data);
        }else {
            $this->AdmCuentaM->updatecuent($idadministrador);
            redirect(base_url('index.php/AdmcuentaC/showcuenta'),'refresh');
        }
    }



}?>