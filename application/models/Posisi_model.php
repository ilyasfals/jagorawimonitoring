<?php
/**
 * Created by PhpStorm.
 * User: giriw
 * Date: 8/3/2017
 * Time: 4:18 PM
 */

class Posisi_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_posisi($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('posisi');
            return $query->result_array();
        }

        $query = $this->db->get_where('posisi', array('id' => $id));
        return $query->row_array();
    }

    public function get_posisiID($id)
    {
        $query = $this->db->get_where('posisi', array('id' => $id));
        return $query->row_array();
    }

    public function set_posisi()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);

        return $this->db->insert('posisi', $data);
    }

    function update_posisi()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);
        return $this->db->where('id', $this->input->post('id'))+
        $this->db->update('posisi', $data);

    }

    function delete_posisi($id)
    {
        return $this->db->where('posisi', $id)+
        $this->db->delete('posisi');

    }
}