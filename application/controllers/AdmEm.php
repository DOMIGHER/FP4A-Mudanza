<?php
class AdmEm extends CI_Controller
{
    public function show()
    {
        $this->load->model('AdmEmC');
        $data['informacion'] = $this->AdmEmC->getDatos();
        $this->load->view('encabezados/head.php');
        $this->load->view('encabezados/menu.php');
        $this->load->view('Administrar/AdminEmpV.php', $data);
        $this->load->view('encabezados/footer.php');
    }

    public function detalle($Idempleado)
    {
        $this->load->model('AdmEmC');
        $data['deta'] = $this->AdmEmC->getDato($Idempleado);

        $this->load->view('encabezados/head.php');
        $this->load->view('encabezados/menu.php');
        $this->load->view('Administrar/DetallesE.php', $data);
        $this->load->view('encabezados/footer.php');
    }

    public function borrarE($Idempleado)
    {
        $this->load->model('AdmEmC');
        if ($data['deta'] = $this->AdmEmC->deleteDato($Idempleado)) {
            redirect(base_url('index.php/AdmEm/show'), 'refresh');
        }
    }

    public function insertE() {
        $this->load->model('AdmEmC');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('encabezados/head.php');
            $this->load->view('encabezados/menu.php');
            $this->load->view('Administrar/insertE');
            $this->load->view('encabezados/footer.php');
        } else {
            $this->AdmEmC->insertE();
            redirect(base_url('index.php/AdmEm/show'), 'refresh');
        }
    }
}
