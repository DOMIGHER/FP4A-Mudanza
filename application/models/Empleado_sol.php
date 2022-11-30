<?php 
class Empleado_sol extends CI_Model
{
    function getDatos(){
        $query = $this->db->get('solicitud');
        return $query->result();
    }

    function getDato($Idsolicitud){
        $this->db->where('Idsolicitud',$Idsolicitud);
        $query = $this->db->get('solicitud');
        return $query->result();
    }


    function EditarE($Idsolicitud){
        $data = array(
            'Idsolicitud' => $this->input->post('Idsolicitud')
    );
    $this->db->where('Idsolicitud', $Idsolicitud);
    $this->db->update('solicitud', $data);
    }
} ?>
