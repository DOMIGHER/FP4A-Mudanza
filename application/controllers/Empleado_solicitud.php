<?php
class Empleado_solicitud extends CI_Controller
{
    public function show()
    {
        $this->load->model('Empleado_sol');
        $data['informacion'] = $this->Empleado_sol->getDatos();
        $this->load->view('Empleado_soli/AdminEmpV.php', $data);
        $this->load->view('Empleado_menu/menuV.php');
    }

    public function detalle($Idsolicitud)
    {
        $this->load->model('Empleado_sol');
        $data['deta'] = $this->Empleado_sol->getDato($Idsolicitud);

        $this->load->view('Empleado_solicitud/DetallesE.php', $data);
    }


    public function EditarE($Idsolicitud) {
        $this->load->model('Empleado_sol');
        $data['deta'] = $this->Empleado_sol->getDato($Idsolicitud);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Empleado_soli/EditarE',$data);
        } else {
            $this->Empleado->EditarE($Idsolicitud);
            redirect(base_url('index.php/Empleado_soli/show'), 'refresh');
        }
    }
}
