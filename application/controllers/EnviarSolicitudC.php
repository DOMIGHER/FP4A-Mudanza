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

    public function AgregarHabitacion()
	{
        $this->load->view('Cliente/3.1AgregarHabitaciones.php');
	} 

    public function EditarHabitacion()
	{
        $this->load->view('Cliente/2.1EditarHabitacion.php');
	}

    public function EnviarSolicitud()
	{
        $this->load->view('Cliente/1.AdministrarSolicitud.php');
	}

    public function AdminSolicitud()
	{
        $this->load->view('Cliente/1.2AdministrarSolicitud.php');
	}

    public function SalvarHabitacion()
	{
        $this->load->view('Cliente/2.3GuardarHabitacion.php');
    }

    public function Regresar()
	{
        $this->load->view('Cliente/2.4GuardarHabitacion.php');
    }

    public function Editar()
	{
        $this->load->view('Cliente/1.3EditarSolicitud.php');
    }

}

?>