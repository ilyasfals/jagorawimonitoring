<?php
class Pulls extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pulls_model');
        $this->load->helper('url_helper');
        header("Access-Control-Allow-Origin: *");
    }

    public function index()
    {
        $data['title'] = 'Pull Toll';
        $data['subtitle'] = 'Daftar Transaksi';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pulls/index', $data);
    }

    public function view($id_pulls = NULL)
    {
        $data['pulls_item'] = $this->pulls_model->get_pull($id_pulls);

        if (empty($data['pulls_item']))
        {
                show_404();
        }

        $data['title'] = $data['pulls_item']['id_gerbang'].'-'.$data['pulls_item']['tanggal'].'-'.$data['pulls_item']['shift'];
        $data['subtitle'] = 'Gardu';


        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pulls/view', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Formulir Pull Tol';

        $this->load->model('employees_model');
        $data['employees'] = $this->employees_model->get_employees();

        $this->form_validation->set_rules('id_gerbang', 'Gerbang Tol', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('shift', 'Shift', 'required');
        $this->form_validation->set_rules('pengawas1', 'Pengawas', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'pulls/create', $data);
        }
        else
        {
            $this->pulls_model->set_pull();
            redirect('pulls/index/');
        }
    }

    public function createGardu($id_pulls = NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Formulir Gardu Tol';
        $data['id_pulls'] = $id_pulls;

        $this->load->model('employees_model');
        $data['employees'] = $this->employees_model->get_employees();

        $this->form_validation->set_rules('plan_petugas', 'Rencana Petugas', 'required');
        $this->form_validation->set_rules('real_petugas', 'Realisasi Petugas', 'required');
        $this->form_validation->set_rules('jam_hadir', 'Jam Hadir', 'required');
        $this->form_validation->set_rules('sifat_tugas', 'Sifat Tugas', 'required');
        $this->form_validation->set_rules('cashbox', 'Cash Box', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'pulls/createGardu', $data);
        }
        else
        {
            $this->pulls_model->set_gardu();
            $this->load->view('pulls/success');
        }
    }

    //Checklist
    public function checklist(){
        $data['title'] = 'Pull Toll';
        $data['subtitle'] = 'Checklist';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pulls/checklist', $data);
    }
}