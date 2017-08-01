<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employees extends CI_Controller {

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
        $data['title'] = 'Daftar Pegawai';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'employees/karyawan', $data);
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

    function json(){
       $sql = $this->db->query(
           "select npp,nama from employees limit 1"
       )->result();
        echo json_encode($sql);
    }

    function datatables_ajax()
    {
        /** AJAX Handle */
        if(
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        )
        {

            $this->load->model('MEmployees');

            /**
             * Mengambil Parameter dan Perubahan nilai dari setiap
             * aktifitas pada table
             */
            $datatables  = $_POST;
            $datatables['table']    = 'employees';
            $datatables['id-table'] = 'id';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'npp',
                'nama'
            );
            /**
             * menggunakan table join
             */
//            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->MEmployees->Datatables($datatables);
        }
        return;
    }
}