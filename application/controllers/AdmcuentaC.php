<?php 

class AdmcuentaC extends CI_Controller{

    public function verCuenta(){
        $this->load->model('AdmCuentaM');
        $data['administrador'] = $this->AdmCuentaM->getCuenta();

        $this->load->view('AdmCuenta/AdmvercuentaV.php', $data);


    }

    public function ModCuenta($idadministrador){
        $this->load->model('AdmCuentaM');
        $data['administrador'] = $this->AdmCuentaM->modificaCuenta($idadministrador);

        $this->load->helper(array('from','url'));

        $this->load->library('from_validation');
        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('AdmCuenta/AdmmodcuentaV.php', $data);

        }else {

            $this->AdmCuentaM->modificaCuenta();
            redirect(base_url('index.php/AdmcuentaC/verCuenta'),'refresh');
            
        }


        
        
    }




}
?>