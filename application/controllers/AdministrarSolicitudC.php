<?php

class AdministrarSolicitudC extends CI_Controller
{
    public function show()
	{
        $this->load->view('Cliente/1.AdministrarSolicitud.php');
	}

    public function CrearSolicitud()
	{
        $this->load->view('Cliente/2.EnviarSolicitud.php');
    }


	}



?>