<?php
/**
 * Created by PhpStorm.
 * User: giriw
 * Date: 8/3/2017
 * Time: 4:18 PM
 */

class Jabatan_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_jabatan($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('jabatan');
            return $query->result_array();
        }

        $query = $this->db->get_where('jabatan', array('id' => $id));
        return $query->row_array();
    }

    public function get_jabatanID($id)
    {
        $query = $this->db->get_where('jabatan', array('id' => $id));
        return $query->row_array();
    }

    public function set_jabatan()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);

        return $this->db->insert('jabatan', $data);
    }

    function update_jabatan()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);
        return $this->db->where('id', $this->input->post('id'))+
        $this->db->update('jabatan', $data);

    }

    function delete_jabatan($id)
    {
        return $this->db->where('jabatan', $id)+
        $this->db->delete('jabatan');

    }
}