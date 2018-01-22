<?php
class Users_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function create_users()
    {
        $this->load->helper('url');
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'id_employees' => $this->input->post('id_pegawai'),
            'role' => $this->input->post('role')
        );
        return $this->db->insert('users', $data);
    }

    public function update_users()
    {
        $this->load->helper('url');
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'id_employees' => $this->input->post('id_pegawai'),
            'role' => $this->input->post('role')
        );
        $id= $this->input->post('id_user');
        return $this->db->where('id_user', $id)+$this->db->update('users',$data);
    }

    public function get_users($id = FALSE){
        if ($id === FALSE) {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('id_user' => $id));
        return $query->row_array();
    }


    public function getListUsers($id){
        $query = $this->db->get_where('users', array('id_user' => $id));
        return $query->row_array();
    }

    public function getListBanner(){
        $query = $this->db->get_where('users', array('is_active' => 1));
        return $query->result_array();
    }

    public function delete_users($id){
        $this->db->where('id_user', $id);
        $this->db->delete('users');
    }

    function get_option() {
        $this->db->select('*');
        $this->db->from('role');
        $query = $this->db->get();
        return $query->result();
    }
}