<?php
class AdmcostosC extends CI_Controller{

    public function Showpagototal(){
        $this->load->model('AdmcostosM');
        $data['costo'] = $this->AdmcostosM->getcostos();

        $this->load->view('Admcostos/AdmcostosV.php',$data);
        $this->load->view('vistamenu/menuV.php');
    }

    public function detallecostos($idpagototal){
        $this->load->model('AdmcostosM');
        $data['costos'] = $this->AdmcostosM->vercostos($idpagototal);

        $this->load->view('Admcostos/AdmmodcostosV.php',$data);
    }

     
    public function borrarcostos($idpagototal){
        $this->load->model('AdmcostosM');
        if($this->AdmcostosM->deletecostos($idpagototal)){
            redirect(base_url('index.php/AdmcostosC/Showpagototal'),'refresh');

        }}

    public function incertarcostos(){
        $this->load->model('AdmcostosM');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('pago_caseta','pago_caseta', 'required');
        

        if($this->form_validation->run() == FALSE){
            $this->load->view('Admcostos/insertcostosV.php');

        }else {
            $this->AdmcostosM->insertcosto();
            redirect(base_url('index.php/AdmcostosC/Showpagototal'),'refresh');
             
        }
    }


    public function updatecostos($idpagototal){
        $this->load->model('AdmcostosM');
        $data['costos'] = $this->AdmcostosM->vercostos($idpagototal);
        $this->load->helper(array('form', 'url'));



        $this->load->library('form_validation');
        $this->form_validation->set_rules('pago_caseta','pago_caseta', 'required');
        

        if($this->form_validation->run() == FALSE){

            $this->load->view('Admcostos/updatecostosV.php',$data);

        }else {
            $this->AdmcostosM->modificacosto($idpagototal);
            redirect(base_url('index.php/AdmcostosC/Showpagototal'),'refresh');
             
        }
    }
    
    


}
?>