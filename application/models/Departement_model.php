<?php
/**
 * Created by PhpStorm.
 * User: giriw
 * Date: 8/3/2017
 * Time: 4:18 PM
 */

class Departement_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_department($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('departement');
            return $query->result_array();
        }

        $query = $this->db->get_where('departement', array('id' => $id));
        return $query->row_array();
    }

    public function get_departmentID($id)
    {
        $query = $this->db->get_where('departement', array('id' => $id));
        return $query->row_array();
    }

    public function set_departement()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);

        return $this->db->insert('departement', $data);
    }

    function update_departement()
    {
        $this->load->helper('url');

        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        var_dump($data);
       return $this->db->where('id', $this->input->post('id'))+
        $this->db->update('departement', $data);

    }

    function delete_departement($id)
    {
        return $this->db->where('id', $id)+
        $this->db->delete('departement');

    }

    function get_list() {
        // query in database
        return $query = $this->db->get('departement'); //table name members
    }

}