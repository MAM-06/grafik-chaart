<?php
class grafik_model extends CI_Model{
    function load_data(){
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('laporan');
        return $query->result_array();
    }
}
?>