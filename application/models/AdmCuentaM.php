
<?php 

class AdmCuentaM extends CI_Model{


function getcuenta(){
    $query = $this->db->get('administrador');
    return $query->result();
}

function detallecuenta($idadministrador){
    $this->db->where('idadministrador',$idadministrador);
    $query = $this->db->get('administrador');
    return $query->result();
    }


    function updatecuent($idadministrador){
        $data = array(
            'Nombre' =>$this->input->post('nombre'),
            'apellido_paterno' =>$this->input->post('apellido_paterno'),
            'apellido_materno' =>$this->input->post('apellido_materno'),
            'celular' =>$this->input->post('celular')

        );

        $this->db->where('idadministrador', $idadministrador);
        $this->db->update('administrador', $data);

        }












}?>
