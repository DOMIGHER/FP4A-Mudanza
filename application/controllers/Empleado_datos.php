<?php
class Empleado_datos extends CI_Controller
{
    public function show()
    {
        $this->load->model('Empleado');
        $data['informacion'] = $this->Empleado->getDatos();
        $this->load->view('Empleado_data/AdminEmpV.php', $data);
        $this->load->view('Empleado_menu/menuV.php');
    }

    public function detalle($Idempleado)
    {
        $this->load->model('Empleado');
        $data['deta'] = $this->AdmEmC->getDato($Idempleado);

        $this->load->view('Empleado_data/DetallesE.php', $data);
    }


    public function EditarE($Idempleado) {
        $this->load->model('Empleado');
        $data['deta'] = $this->Empleado->getDato($Idempleado);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Empleado_data/EditarE',$data);
        } else {
            $this->Empleado->EditarE($Idempleado);
            redirect(base_url('index.php/Empleado_datos/show'), 'refresh');
        }
    }
}
