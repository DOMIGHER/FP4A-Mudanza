
<?php 

class Emp_info extends CI_Controller{

    public function verinformacionempresa(){
        $this->load->model('AdminfempresaM');
        $data['infoempresa'] = $this->AdminfempresaM->getinfcuenta();
        
        $this->load->view('Adminfempresa/AdminfempresaV.php',$data);

    }

    public function modinformacionempresa($Idinfoempresa){
        $this->load->model('AdminfempresaM');
        $data['infoempresa'] = $this->AdminfempresaM->getinfcuentas($Idinfoempresa);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('Adminfempresa/AdmeditinfempresaV.php',$data);
            

        } else {
            $this->modinformacionempresaM->modinformacionempresa($Idinfoempresa);
            redirect(base_url('index.php/AdmInfoempresaC/verinformacionempresa'), 'refresh');
        }


    }

    

    


}
?>