<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        header("Access-Control-Allow-Origin: *");
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['subtitle'] = 'Transaksi';

        //Dapatkan data jumlah dan nilai transaksis
        $year = 0;
        $this->load->model('transaksis_model');
        $data['transaksi'] = $this->transaksis_model->get_rekap_transaksi_year($year);


        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'dashboard/index', $data);
    }

    public function kpi()
    {
        $data['title'] = 'Dashboard';
        $data['subtitle'] = 'Key Performance Indikator';

        //Dapatkan data jumlah dan nilai transaksis
        $year = 0;
        $this->load->model('kpis_model');
        $data['kpi'] = $this->kpis_model->get_last_month_rekap_year($year);
        $now = new \DateTime('now');
        $data['current_month'] = (int) $now->format('m');


        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'dashboard/kpi', $data);
    }

    function json(){
       $sql = $this->db->query("select npp,nama from employees limit 1")->result();
        echo json_encode($sql);
    }
}