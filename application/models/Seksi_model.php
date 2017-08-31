<?php
/**
 * Created by PhpStorm.
 * User: giriw
 * Date: 8/3/2017
 * Time: 4:18 PM
 */

class Seksi_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_seksi($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('seksi');
            return $query->result_array();
        }

        $query = $this->db->get_where('seksi', array('id' => $id));
        return $query->row_array();
    }

    public function get_seksiID($id)
    {
        $query = $this->db->get_where('seksi', array('id' => $id));
        return $query->row_array();
    }

    public function set_seksi()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);

        return $this->db->insert('seksi', $data);
    }

    function update_seksi()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);
        return $this->db->where('id', $this->input->post('id'))+
        $this->db->update('seksi', $data);

    }

    function delete_seksi($id)
    {
        return $this->db->where('id', $id)+
        $this->db->delete('seksi');

    }
}