<?php

class Emp_Repor extends CI_Controller
{
    public function show()
	{
        $this->load->view('Empleado/7.AdministrarReporte.php');
	}

	public function ConsultarReporte()
	{
        $this->load->view('Empleado/8.ConsultarSolicitud.php');
	}

	public function Delete()
	{
        $this->load->view('warning/Crash.php');
	}

	public function Borrar()
	{
        $this->load->view('warning/Delete.php');
	}



	}


?>