<?php 

class AdminfempresaM extends CI_Model{

    function getinfcuenta(){
        $query = $this->db->get('infoempresa');
        return $query->result();

    }

    function getinfcuentas($Idinfoempresa){
        $this->db->where('$Idinfoempresa',$Idinfoempresa);
        $query = $this->db->get('infoempresa');
        return $query->result();
    }

    public function modinformacionempresaM($Idinfoempresa){
        $data = array(
            'idinfoempresa' => $this->input->post('idinfoempresa'),
            'descripcion' => $this->input->post('descripcion')
        );
    $this->db->where('Idinfoempresa', $Idinfoempresa);
    $this->db->update('infoempresa', $data);
    }

}
?>