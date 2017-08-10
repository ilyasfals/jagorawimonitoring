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

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Formulir Pull Tol';

        $this->form_validation->set_rules('npp', 'NPP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'pulls/create', $data);
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
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