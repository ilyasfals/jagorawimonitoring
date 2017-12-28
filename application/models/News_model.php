<?php
class News_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function create_news()
    {
        $this->load->helper('url');

        $data = array(
            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'content' => $this->input->post('content'),
            'is_active' => $this->input->post('is_active')
        );
        return $this->db->insert('news', $data);
    }

    public function update_news()
    {
        $id= $this->input->post('id');

        $data = array(
            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'content' => $this->input->post('content'),
            'is_active' => $this->input->post('is_active')
        );
        return $this->db->where('id', $id)+$this->db->update('news',$data);
    }

    public function get_news($id = FALSE){
        if ($id === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }


    public function getListNews($id){
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }

    public function getListBanner(){
        $query = $this->db->get_where('news', array('is_active' => 1));
        return $query->result_array();
    }

    public function delete_news($id){
        $this->db->where('id', $id);
        $this->db->delete('news');
    }
}