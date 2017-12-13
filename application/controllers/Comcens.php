<?php
class Comcens extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('employees_model');
        $this->load->helper('url_helper');
        header("Access-Control-Allow-Origin: *");
    }

    public function index()
    {
        $data['employees'] = $this->employees_model->get_employees();
        $data['title'] = 'Dashboard Monitoring KPI';

        $this->load->library('parser');
        $this->template->load('default_layout', 'contents' , 'employees/index', $data);
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
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
            $this->template->load('default_layout', 'contents' , 'employees/index', $data);


        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }
}