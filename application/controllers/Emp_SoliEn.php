<?php

class Emp_SoliEn extends CI_Controller
{
    public function show()
	{
        $this->load->view('Empleado/2.EnviarSolicitud.php');
	} 
    
    public function AgregarHabitaciones()
	{
        $this->load->view('Empleado/3.AgregarHabitacion.php');
	} 


    public function EnviarSolicitud()
	{
        $this->load->view('Empleado/1.AdministrarSolicitud.php');
	}

}

?>