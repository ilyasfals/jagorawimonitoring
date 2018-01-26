<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PublicCtr extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        header("Access-Control-Allow-Origin: *");
    }

    public function tvMonitoring(){
        $data['title'] = 'Dashboard Monitoring KPI';
        $data['subtitle'] = 'Transaksi';

        //Dapatkan data jumlah dan nilai transaksis
        $year = $_SESSION['tahun'];
        $this->load->model('rekaptransaksis_model');
        $data['transaksi'] = $this->rekaptransaksis_model->get_rekap_transaksi_year($year);

        $query = $this->db->query('select last from lasttenminutes');

        $data['lasttenminutes'] = $query->result_array();

        $this->load->library('parser');
        $this->template->load('wrapperpublic', 'contents' , 'publicctr/tvmonitoring', $data);
    }
}