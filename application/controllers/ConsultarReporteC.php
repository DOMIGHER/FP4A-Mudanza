<?php

class ConsultarReporteC extends CI_Controller
{
    public function show()
	{
        $this->load->view('Cliente/9.ConsultarReporte.php');
	}

	public function enviar()
	{
        $this->load->view('Advertencia/success.php');
	}

	public function cancelar()
	{
        $this->load->view('Cliente/7.AdministrarReporte.php');
	}


	}

	


?>