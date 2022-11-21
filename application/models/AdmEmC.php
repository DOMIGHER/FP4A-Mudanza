<?php 
class AdmEmC extends CI_Model
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

    function deleteDato($Idempleado){
        $this->db->where('idempleado',$Idempleado);
        $this->db->delete('empleado');
        return TRUE;
    }

    function insertE(){
        $data = array(
            'idempleado' => $this->input->post('idempleado'),
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'contrasenia' => $this->input->post('contrasenia'),
            'nacionalidad' => $this->input->post('nacionalidad'),
            'sexo' => $this->input->post('sexo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'num_licencia' => $this->input->post('num_licencia'),
            'rfc' => $this->input->post('rfc'),
            'antecedentes_penales' => $this->input->post('antecedentes_penales'),
            'telefono_fijo' => $this->input->post('telefono_fijo'),
            'celular' => $this->input->post('celular')
    );
    
    $this->db->insert('empleado', $data);
    }

    function EditarE($Idempleado){
        $data = array(
            'idempleado' => $this->input->post('idempleado'),
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'contrasenia' => $this->input->post('contrasenia'),
            'nacionalidad' => $this->input->post('nacionalidad'),
            'sexo' => $this->input->post('sexo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'num_licencia' => $this->input->post('num_licencia'),
            'rfc' => $this->input->post('rfc'),
            'antecedentes_penales' => $this->input->post('antecedentes_penales'),
            'telefono_fijo' => $this->input->post('telefono_fijo'),
            'celular' => $this->input->post('celular')
    );
    $this->db->where('Idempleado', $Idempleado);
    $this->db->update('empleado', $data);
    }
} ?>
