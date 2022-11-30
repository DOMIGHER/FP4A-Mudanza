<?php  
/**
 * 
 */
class ClienteM extends CI_Model
{
	
	function getDatos(){
        $query = $this->db->get('cliente');
        return $query->result();
	}

    function getDato($idcliente){
        $this->db->where('idcliente',$idcliente);
        $query = $this->db->get('cliente');
        return $query->result();
    }
    
    function EditarC($idcliente){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'celular' => $this->input->post('celular'),
            'pais' => $this->input->post('pais'),
            'sexo' => $this->input->post('sexo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento')
    );
    $this->db->where('idcliente', $idcliente);
    $this->db->update('cliente', $data);    }

}?>