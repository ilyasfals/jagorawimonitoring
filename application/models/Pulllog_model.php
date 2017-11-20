<?php
/**
 * Created by PhpStorm.
 * User: giriw
 * Date: 8/3/2017
 * Time: 4:18 PM
 */

class Pulllog_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('date');
    }

    public function set_pull_log()
    {
        $this->load->helper('url');

        //$now = DateTime::createFromFormat('U.u', microtime(true));
        $data = array(
            'time' => date("Y-m-d H:i:s"),
            'status' => true
        );


        return $this->db->insert('pull_log', $data);
    }

}