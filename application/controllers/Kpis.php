<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KPIs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kpis_model');
        $this->load->model('masterkpis_model');
        $this->load->helper('url_helper');
        $this->CI =& get_instance();
        header("Access-Control-Allow-Origin: *");
    }

    public function index()
    {
        $data['title'] = 'Dashboard Monitoring KPI';
        $data['subtitle'] = 'Daftar Transaksi';
        $data['tahun'] = $_SESSION['tahun'];

        $data['master_kpis'] = $this->kpis_model->get_master_kpis();

//        var_dump($data['master_kpis']);die();

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
            $this->template->load('wrapper', 'contents' , 'kpis/create', $data);
        }
        else
        {
            if($this->kpis_model->get_kpi_by_tahun_and_master($this->input->post('tahun'), $this->input->post('id_master_kpis')) !=null){
                $this->kpis_model->update_kpi();
            }
            $this->kpis_model->set_kpi();
            redirect('kpis/index/');
        }
    }
    public function edit($tahun, $id_master_kpis){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Key Performance Indicator';
        $data['subtitle'] = 'Formulir';
        $data['tahun'] = $tahun;
        $data['id_master_kpis'] = $id_master_kpis;

        $data['master_kpis'] = $this->masterkpis_model->get_master_kpis($id_master_kpis);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('id_master_kpis', 'Indikator', 'required');
        $this->form_validation->set_rules('target_1', 'Target 1', 'required');
        $this->form_validation->set_rules('target_2', 'Target 2', 'required');

        $kpi = $this->kpis_model->get_kpi_by_tahun_and_master($tahun, $id_master_kpis);

        if ($this->form_validation->run() === FALSE){
            if( $kpi == null){
                $kpiGenerate = array(
                    'tahun' => $tahun,
                    'id_master_kpis' => $id_master_kpis,
                    'target_1' => 0,
                    'target_2' => 0,
                    'target_3' => 0,
                    'target_4' => 0,
                    'target_5' => 0,
                    'target_6' => 0,
                    'target_7' => 0,
                    'target_8' => 0,
                    'target_9' => 0,
                    'target_10' => 0,
                    'target_11' => 0,
                    'target_12' => 0,
                    'realisasi_1' => 0,
                    'realisasi_2' => 0,
                    'realisasi_3' => 0,
                    'realisasi_4' => 0,
                    'realisasi_5' => 0,
                    'realisasi_6' => 0,
                    'realisasi_7' => 0,
                    'realisasi_8' => 0,
                    'realisasi_9' => 0,
                    'realisasi_10' => 0,
                    'realisasi_11' => 0,
                    'realisasi_12' => 0,
                );

               $this->db->insert('kpis', $kpiGenerate);
               $kpi = $this->kpis_model->get_kpi_by_tahun_and_master($tahun, $id_master_kpis);

            }
            $data['kpi'] = $kpi;

            $this->template->load('wrapper', 'contents' , 'kpis/edit', $data);
        }
        else
        {
            $this->kpis_model->update_kpi();
            redirect('kpis/index/');
        }
    }
}