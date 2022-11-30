<?php

class ModificarCuentaC extends CI_Controller
{
    public function show()
	{
        $this->load->model('ClienteM');
        $data['cliente'] = $this->ClienteM->getDatos();
        $this->load->view('Cliente/4.ModificarCuenta.php',$data);
	}

    public function bye()
	{
        $this->load->view('Advertencia/LogOut.php');
	}

    public function modify($idcliente) {
        $this->load->model('ClienteM');
        $data['cliente'] = $this->ClienteM->getDato($idcliente);

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Cliente/5.ModificarCuentas.php',$data);
        } else {
            $this->ClienteM->EditarC($idcliente);
            redirect(base_url('index.php/ModificarCuentaC/show'), 'refresh');
        }
    }

}

?>