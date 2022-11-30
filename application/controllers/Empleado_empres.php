
<?php 

class Empleado_empres extends CI_Controller{

    public function verinformacionempresa(){
        $this->load->model('Empleado_info');
        $data['infoempresa'] = $this->Empleado_info->getinfcuenta();
        
        $this->load->view('Empleado_emp/AdminfempresaV.php',$data);
        $this->load->view('Empleado_menu/menuV.php');

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