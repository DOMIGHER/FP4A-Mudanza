
<?php 

class AdmInfoempresaC extends CI_Controller{

    public function verinformacionempresa(){
        $this->load->model('AdminfempresaM');
        $data['infoempresa'] = $this->AdminfempresaM->getinfcuenta();
        
        $this->load->view('Adminfempresa/AdminfempresaV.php',$data);
        $this->load->view('vistamenu/menuV.php');

    }

  public function updateinfoempresas($Idinfoempresa){
    $this->load->model('AdminfempresaM');

    $data['infocuenta'] = $this->AdminfempresaM->detallinfocuenta($Idinfoempresa);

    $this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');

    if($this->form_validation->run() == FALSE){

        $this->load->view('Adminfempresa/AdmeditinfempresaV.php',$data);

    }else {
        $this->AdminfempresaM->modinformacionempresaM($Idinfoempresa);
        redirect(base_url('index.php/AdmInfoempresaC/verinformacionempresa'),'refresh');
         
    }
}


}?>