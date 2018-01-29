<?php
class Targetpendapatan_model extends CI_Model {

    public function __construct(){
            $this->load->database();
    }

    public function getTarget($year){
        $query = $this->db->get_where('kpi_transaksi', array('tahun' => $year));
        return $query->row_array();
    }

    public function update_target(){
        $this->load->helper('url');
        $target = $this->getTarget($this->input->post('tahun'));
        $data = array(
            'tahun' => $this->input->post('tahun'),
            'target_1' => $this->input->post('target_1'),
            'target_2' => $this->input->post('target_2'),
            'target_3' => $this->input->post('target_3'),
            'target_4' => $this->input->post('target_4'),
            'target_5' => $this->input->post('target_5'),
            'target_6' => $this->input->post('target_6'),
            'target_7' => $this->input->post('target_7'),
            'target_8' => $this->input->post('target_8'),
            'target_9' => $this->input->post('target_9'),
            'target_10' => $this->input->post('target_10'),
            'target_11' => $this->input->post('target_11'),
            'target_12' => $this->input->post('target_12'),
        );
        if(is_null($target)){ //edit
            return $this->db->insert('kpi_transaksi', $data);
        }else{ //create
            return $this->db->update('kpi_transaksi', $data);
        }
    }

}