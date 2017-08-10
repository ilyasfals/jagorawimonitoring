<?php
class Pulls_model extends CI_Model {

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
    
    public function set_pull()
    {
        $this->load->helper('url');

        $data = array(
            'id_gerbang' => $this->input->post('id_gerbang'),
            'shift' => $this->input->post('shift'),
            'tanggal' => $this->input->post('tanggal'),
            'pengawas1' => $this->input->post('tanggal')
        );
        var_dump($data);

        return $this->db->insert('pulls', $data);
    }
    public function set_gardu()
    {
        $this->load->helper('url');

        $data = array(
            'id_pulls' => $this->input->post('id_pulls'),
            'plan_petugas' => $this->input->post('plan_petugas'),
            'jam_hadir' => $this->input->post('jam_hadir'),
            'sifat_tugas' => $this->input->post('sifat_tugas'),
            'cashbox' => $this->input->post('cashbox')
        );
        return $this->db->insert('gardu', $data);
    }
}