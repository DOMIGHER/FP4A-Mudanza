<?php 

class AdminfempresaM extends CI_Model{

    function getinfcuenta(){
        $query = $this->db->get('infoempresa');
        return $query->result();
    }


}
?>