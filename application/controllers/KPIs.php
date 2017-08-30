<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KPIs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kpis_model');
        $this->load->helper('url_helper');
        $this->CI =& get_instance();
        header("Access-Control-Allow-Origin: *");
    }

    public function index()
    {
        $data['title'] = 'Pull Toll';
        $data['subtitle'] = 'Daftar Transaksi';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'kpis/index', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Key Performance Indicator';
        $data['subtitle'] = 'Formulir';

        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('id_master_kpis', 'Indikator', 'required');
        $this->form_validation->set_rules('target_1', 'Target 1', 'required');
        $this->form_validation->set_rules('target_2', 'Target 2', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $sql = 'SELECT id_master_kpis, deskripsi, area, perspektif FROM master_kpis where pic =\''.$_SESSION['role'].'\' ORDER by id_master_kpis';
            $list = $this->db->query($sql);

            $data['master_kpis'] = array();

            $iMaster = 0;
            foreach ($list->result() as $row) {
                $data['master_kpis'][$iMaster] = array();
                $data['master_kpis'][$iMaster]['id_master_kpis'] =  $row->id_master_kpis;
                $data['master_kpis'][$iMaster]['deskripsi'] =  $row->deskripsi;
                $data['master_kpis'][$iMaster]['area'] =  $row->area;
                $data['master_kpis'][$iMaster]['perspektif'] =  $row->perspektif;
                $iMaster++;
            }
            $this->template->load('wrapper', 'contents' , 'KPIs/create', $data);
        }
        else
        {
            $this->kpis_model->set_kpi();
            redirect('KPIs/index/');
        }
    }
}