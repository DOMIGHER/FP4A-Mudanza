<?php

class Emp_consul extends CI_Controller
{
    public function show()
	{
        $this->load->view('Empleado/8.ConsultarSolicitud.php');
	}

	public function regresar()
	{
        $this->load->view('Empleado/7.AdministrarReporte.php');
	}

}

	


?>