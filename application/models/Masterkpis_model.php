<?php
class Masterkpis_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_master_kpis($id_master_kpis = FALSE)
    {
        if ($id_master_kpis === FALSE)
        {
            $query = $this->db->get('master_kpis');
            return $query->result_array();
        }

        $query = $this->db->get_where('master_kpis', array('id_master_kpis' => $id_master_kpis));
        return $query->row_array();
    }
}