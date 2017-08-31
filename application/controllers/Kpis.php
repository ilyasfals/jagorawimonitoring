<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kpis_model');
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
        $this->form_validation->set_rules('target_3', 'Target 3', 'required');
        $this->form_validation->set_rules('target_4', 'Target 4', 'required');
        $this->form_validation->set_rules('target_5', 'Target 5', 'required');
        $this->form_validation->set_rules('target_6', 'Target 6', 'required');
        $this->form_validation->set_rules('target_7', 'Target 7', 'required');
        $this->form_validation->set_rules('target_8', 'Target 8', 'required');
        $this->form_validation->set_rules('target_9', 'Target 9', 'required');
        $this->form_validation->set_rules('target_10', 'Target 10', 'required');
        $this->form_validation->set_rules('target_11', 'Target 11', 'required');
        $this->form_validation->set_rules('target_12', 'Target 12', 'required');

        $this->form_validation->set_rules('realisasi_1', 'Realisasi 1', 'required');
        $this->form_validation->set_rules('realisasi_2', 'Realisasi 2', 'required');
        $this->form_validation->set_rules('realisasi_3', 'Realisasi 3', 'required');
        $this->form_validation->set_rules('realisasi_4', 'Realisasi 4', 'required');
        $this->form_validation->set_rules('realisasi_5', 'Realisasi 5', 'required');
        $this->form_validation->set_rules('realisasi_6', 'Realisasi 6', 'required');
        $this->form_validation->set_rules('realisasi_7', 'Realisasi 7', 'required');
        $this->form_validation->set_rules('realisasi_8', 'Realisasi 8', 'required');
        $this->form_validation->set_rules('realisasi_9', 'Realisasi 9', 'required');
        $this->form_validation->set_rules('realisasi_10', 'Realisasi 10', 'required');
        $this->form_validation->set_rules('realisasi_11', 'Realisasi 11', 'required');
        $this->form_validation->set_rules('realisasi_12', 'Realisasi 12', 'required');

        $this->form_validation->set_message('required', '{field} harus diisi');

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
            $this->Kpis_model->set_kpi();
            redirect('kpis/index/');
        }
    }
}