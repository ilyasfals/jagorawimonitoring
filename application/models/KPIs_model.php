<?php
class KPIs_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_pull($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('pulls');
            return $query->result_array();
        }

        $query = $this->db->get_where('pulls', array('id_pulls' => $id));
        return $query->row_array();
    }
    
    public function set_kpi()
    {
        $this->load->helper('url');
        $data = array(
            'tahun' => $this->input->post('tahun'),
            'id_master_kpis' => $this->input->post('id_master_kpis'),
            'target_1' => $this->input->post('target_1'),
            'target_2' => $this->input->post('target_2')
        );

        return $this->db->insert('kpis', $data);
    }
    public function set_pullsgardu()
    {
        $this->load->helper('url');

        $data = array(
            'id_pulls' => $this->input->post('id_pulls'),
            'id_gardus' => $this->input->post('id_gardus'),
            'plan_petugas' => $this->input->post('plan_petugas'),
            'real_petugas' => $this->input->post('real_petugas'),
            'jam_hadir' => $this->input->post('jam_hadir'),
            'sifat_tugas' => $this->input->post('sifat_tugas'),
            'cashbox' => $this->input->post('cashbox')
        );
        return $this->db->insert('pulls_gardu', $data);
    }
}