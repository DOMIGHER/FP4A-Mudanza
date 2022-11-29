
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
            'nombre' =>$this->input->post('Nombre'),
            'apellido_paterno' =>$this->input->post('apellido_paterno'),
            'apellido_materno' =>$this->input->post('apellido_materno'),
            'correo' =>$this->input->post('correo'),
            'nacionalidad' =>$this->input->post('nacionalidad'),
            'sexo' =>$this->input->post('sexo'),
            'fecha_nacimiento' =>$this->input->post('fecha_nacimiento'),
            'telefono_fijo' =>$this->input->post('telefono_fijo'),
            'celular' =>$this->input->post('celular')

        );

        $this->db->where('idadministrador', $idadministrador);
        $this->db->update('administrador', $data);

        }












}?>
