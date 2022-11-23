<?php

class EnviarSolicitudC extends CI_Controller
{
    public function show()
	{
        $this->load->view('Cliente/2.EnviarSolicitud.php');
	} 
    
    public function AgregarHabitaciones()
	{
        $this->load->view('Cliente/3.AgregarHabitacion.php');
	} 


    public function EnviarSolicitud()
	{
        $this->load->view('Cliente/1.AdministrarSolicitud.php');
	}

}

?>