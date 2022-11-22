
<?php 

class AdmInfoempresaC extends CI_Controller{

    public function verinformacionempresa(){
        $this->load->model('AdminfempresaM');
        $data['infoempresa'] = $this->AdminfempresaM->getinfcuenta();
        
        $this->load->view('Adminfempresa/AdminfempresaV.php',$data);

    }


}
?>