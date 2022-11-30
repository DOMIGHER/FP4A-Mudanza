<?php 
class AdmcostosM extends CI_model{

    function getcostos(){
        $query = $this->db->get('pagototal');
        return $query->result();
    }

    function vercostos($idpagototal){
        $this->db->where('idpagototal',$idpagototal);
        $query = $this->db->get('pagototal');
        return $query->result();

    }

    function deletecostos($idpagototal){
        $this->db->where('idpagototal', $idpagototal);
        $this->db->delete('pagototal');
        return TRUE;
    }

    function insertcosto(){
        $data = array(
            'idpagototal' => $this->input->post('idpagototal'),
            'pago_caseta' => $this->input->post('pago_caseta'),
            'pago_gasolina' => $this->input->post('pago_gasolina'),
            'pago_trasporte' => $this->input->post('pago_trasporte'),
            'pago_empleado' => $this->input->post('pago_empleado'),
            'pago_objeto_pequeno' => $this->input->post('pago_objeto_pequeno'),
            'pago_objeto_mediano' => $this->input->post('pago_objeto_mediano'),
            'pago_objeto_grande' => $this->input->post('pago_objeto_grande'),
            'pago_total' => $this->input->post('pago_total')

        );
        $this->db->insert('pagototal', $data);

    }

    function modificacosto($idpagototal){
        $data = array(
            'idpagototal' => $this->input->post('idpagototal'),
            'pago_caseta' => $this->input->post('pago_caseta'),
            'pago_gasolina' => $this->input->post('pago_gasolina'),
            'pago_trasporte' => $this->input->post('pago_trasporte'),
            'pago_empleado' => $this->input->post('pago_empleado'),
            'pago_objeto_pequeno' => $this->input->post('pago_objeto_pequeno'),
            'pago_objeto_mediano' => $this->input->post('pago_objeto_mediano'),
            'pago_objeto_grande' => $this->input->post('pago_objeto_grande'),
            'pago_total' => $this->input->post('pago_total')

        );
        $this->db->where('idpagototal', $idpagototal);
        $this->db->update('pagototal',$data);
    }


}
?>