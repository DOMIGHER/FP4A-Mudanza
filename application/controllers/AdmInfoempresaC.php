
<?php 

class AdmInfoempresaC extends CI_Controller{

    public function verinformacionempresa(){
        $this->load->model('AdminfempresaM');
        $data['infoempresa'] = $this->AdminfempresaM->getinfcuenta();
        
        $this->load->view('Adminfempresa/AdminfempresaV.php',$data);

    }

    public function updateCuenta($idadministrador){
        
        $this->load->model('AdmCuentaM');

        $data['admimistrador'] = $this->AdmCuentaM->verinformacionempresa($idadministrador);

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        

        if($this->form_validation->run() == FALSE){

            $this->load->view('AdmCuenta/AdmmodcuentaV',$data);

        }else {
            $this->AdmCuentaM->updateProducto ($idadministrador);
            redirect(base_url('index.php/AdmInfoempresaC/verinformacionempresa'),'refresh');
             
        }
    }


    }

    

?>