<?php
class AdmCam extends CI_Controller
{
    public function show()
    {
        $this->load->model('AdmCamC');
        $data['camioneta'] = $this->AdmCamC->getDatos();
        $this->load->view('encabezados/head.php');
        $this->load->view('encabezados/menu.php');
        $this->load->view('AdmCam/AdminCamV.php', $data);
        $this->load->view('encabezados/footer.php');
    }

    public function detalleC($Idcamioneta)
    {
        $this->load->model('AdmCamC');
        $data['camionetaD'] = $this->AdmCamC->getDato($Idcamioneta);

        $this->load->view('encabezados/head.php');
        $this->load->view('encabezados/menu.php');
        $this->load->view('AdmCam/DetallesC.php', $data);
        $this->load->view('encabezados/footer.php');
    }

    public function borrarC($Idcamioneta)
    {
        $this->load->model('AdmCamC');
        if ($data['camionetaB'] = $this->AdmCamC->deleteDato($Idcamioneta)) {
            redirect(base_url('index.php/AdmCam/show'), 'refresh');
        }
    }

    public function insertC()
    {
        $this->load->model('AdmCamC');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('modelo', 'modelo', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('encabezados/head.php');
            $this->load->view('encabezados/menu.php');
            $this->load->view('AdmCam/insertC');
            $this->load->view('encabezados/footer.php');
        } else {
            $this->AdmCamC->insertC();
            redirect(base_url('index.php/AdmCam/show'), 'refresh');
        }
    }

    public function EditarC($Idcamioneta) {
        $this->load->model('AdmCamC');
        $data['camionetaD'] = $this->AdmCamC->getDato($Idcamioneta);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('modelo', 'modelo', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('encabezados/head.php');
            $this->load->view('encabezados/menu.php');
            $this->load->view('AdmCam/EditarC',$data);
            $this->load->view('encabezados/footer.php');
        } else {
            $this->AdmCamC->EditarC($Idcamioneta);
            redirect(base_url('index.php/AdmCam/show'), 'refresh');
        }
    }
}
