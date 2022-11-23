<?php

class ConsultarSolicitudC extends CI_Controller
{
    public function show()
	{
        $this->load->view('Cliente/8.ConsultarSolicitud.php');
	}

	public function regresar()
	{
        $this->load->view('Cliente/7.AdministrarReporte.php');
	}

}

	


?>