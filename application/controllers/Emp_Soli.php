<?php

class Emp_Soli extends CI_Controller
{
    public function show()
	{
        $this->load->view('Empleado/1.AdministrarSolicitud.php');
	}

    public function CrearSolicitud()
	{
        $this->load->view('Empleado/2.EnviarSolicitud.php');
    }


	}



?>