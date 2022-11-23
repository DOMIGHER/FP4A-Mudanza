<?php

class ModificarCuentaC extends CI_Controller
{
    public function show()
	{
        $this->load->view('Cliente/4.ModificarCuenta.php');
	}

    public function bye()
	{
        $this->load->view('Advertencia/LogOut.php');
	}

    public function modify()
	{
        $this->load->helper(array('form','url'));

            $this ->load->library('form_validation');
            $this->form_validation->set_rules('Nombre(s)','Nombre(s)','required');
             if($this->form_validation->run()==false) 
             {
                $this->load->view('Cliente/5.ModificarCuentas.php');
             }
             else
             {
                //$this->load->view('formsucess');
             }
	}

}


?>