<?php
class Kpis_model extends CI_Model {

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
            'target_1' => $this->parseStringMoneyToDouble($this->input->post('target_1')),
            'target_2' => $this->parseStringMoneyToDouble($this->input->post('target_2')),
            'target_3' => $this->parseStringMoneyToDouble($this->input->post('target_3')),
            'target_4' => $this->parseStringMoneyToDouble($this->input->post('target_4')),
            'target_5' => $this->parseStringMoneyToDouble($this->input->post('target_5')),
            'target_6' => $this->parseStringMoneyToDouble($this->input->post('target_6')),
            'target_7' => $this->parseStringMoneyToDouble($this->input->post('target_7')),
            'target_8' => $this->parseStringMoneyToDouble($this->input->post('target_8')),
            'target_9' => $this->parseStringMoneyToDouble($this->input->post('target_9')),
            'target_10' => $this->parseStringMoneyToDouble($this->input->post('target_10')),
            'target_11' => $this->parseStringMoneyToDouble($this->input->post('target_11')),
            'target_12' => $this->parseStringMoneyToDouble($this->input->post('target_12')),
            'realisasi_1' => $this->parseStringMoneyToDouble($this->input->post('realisasi_1')),
            'realisasi_2' => $this->parseStringMoneyToDouble($this->input->post('realisasi_2')),
            'realisasi_3' => $this->parseStringMoneyToDouble($this->input->post('realisasi_3')),
            'realisasi_4' => $this->parseStringMoneyToDouble($this->input->post('realisasi_4')),
            'realisasi_5' => $this->parseStringMoneyToDouble($this->input->post('realisasi_5')),
            'realisasi_6' => $this->parseStringMoneyToDouble($this->input->post('realisasi_6')),
            'realisasi_7' => $this->parseStringMoneyToDouble($this->input->post('realisasi_7')),
            'realisasi_8' => $this->parseStringMoneyToDouble($this->input->post('realisasi_8')),
            'realisasi_9' => $this->parseStringMoneyToDouble($this->input->post('realisasi_9')),
            'realisasi_10' => $this->parseStringMoneyToDouble($this->input->post('realisasi_10')),
            'realisasi_11' => $this->parseStringMoneyToDouble($this->input->post('realisasi_11')),
            'realisasi_12' => $this->parseStringMoneyToDouble($this->input->post('realisasi_12')),
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
    public function parseStringMoneyToDouble($stringMoney){
        //var_dump($stringMoney); die();
        return str_replace(",",".", str_replace(".","", $stringMoney));
    }
}