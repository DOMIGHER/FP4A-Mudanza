<?php

class AdministrarReporteC extends CI_Controller
{
    public function show()
	{
        $this->load->view('Cliente/7.AdministrarReporte.php');
	}

	public function ConsultarReporte()
	{
        $this->load->view('Cliente/8.ConsultarSolicitud.php');
	}

	public function Delete()
	{
        $this->load->view('Advertencia/Crash.php');
	}

	public function Borrar()
	{
        $this->load->view('Advertencia/Delete.php');
	}



	}


?>