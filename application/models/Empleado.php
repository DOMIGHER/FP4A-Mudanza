<?php 
class Empleado extends CI_Model
{
    function getDatos(){
        $query = $this->db->get('empleado');
        return $query->result();
    }

    function getDato($Idempleado){
        $this->db->where('idempleado',$Idempleado);
        $query = $this->db->get('empleado');
        return $query->result();
    }


    function EditarE($Idempleado){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo')
    );
    $this->db->where('Idempleado', $Idempleado);
    $this->db->update('empleado', $data);
    }
} ?>
