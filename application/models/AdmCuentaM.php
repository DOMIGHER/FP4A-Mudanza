<?php 

class AdmCuentaM extends CI_Model{

    function getCuenta(){
        $query = $this->db->get('administrador');
        return $query->result();
    }

    function modificaCuenta($idadministrador){
        $this->db->where('idadministrador',$idadministrador);
        $query = $this->db->get('administrador');
        return $query->result();
    }

}
?>