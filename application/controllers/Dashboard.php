<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaksis_model');
        $this->load->helper('url_helper');
        header("Access-Control-Allow-Origin: *");
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['subtitle'] = 'Transaksi';

        //Dapatkan data jumlah dan nilai transaksis
        $year = 0;
        $data['transaksi'] = $this->transaksis_model->get_rekap_transaksi_year($year);


        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'dashboard/index', $data);
    }

    public function view($slug = NULL)
    {
        $data['employees_item'] = $this->news_model->get_news($slug);

        if (empty($data['employees_item']))
        {
                show_404();
        }

        $data['title'] = $data['employees_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Formulir pegawai';

        $this->form_validation->set_rules('npp', 'NPP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'employees/create', $data);

        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }

    function json(){
       $sql = $this->db->query(
           "select npp,nama from employees limit 1"
       )->result();
        echo json_encode($sql);
    }
}