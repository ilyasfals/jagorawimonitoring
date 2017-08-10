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

    public function get_department($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('posisi');
            return $query->result_array();
        }

        $query = $this->db->get_where('posisi', array('id' => $id));
        return $query->row_array();
    }
}