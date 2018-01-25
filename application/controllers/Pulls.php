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

    public function createPullsGardu($id_pulls = NULL)
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
            $this->template->load('wrapper', 'contents' , 'pulls/createpullsgardu', $data);
        }
        else
        {
            $this->pulls_model->set_pullsgardu();
            redirect('pulls/view/'.$this->input->post('id_pulls'));
        }
    }

    //Checklist
    public function checklist(){
        $data['title'] = 'Pull Toll';
        $data['subtitle'] = 'Checklist';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pulls/checklist', $data);
    }

    public function normalisasi(){
        $data['title'] = 'Pull Toll';
        $data['subtitle'] = 'Normalisasi';

        $year = $_SESSION['tahun'];
        $data['tahun'] =  $year;


        $this->load->model('rekaptransaksis_model');
        $this->load->model('normalisasis_model');
        $data['transaksiList'] = $this->rekaptransaksis_model->getTransaksiNormalisasi($year)['row_rekap_transaksi'];
        $data['normalisasiList'] = $this->normalisasis_model->getNormalisasiByYear($year);

        foreach ($data['normalisasiList'] as $normalisasi){
            $data['transaksiList'][$normalisasi[0]-1][3]=$normalisasi[1];
            $data['transaksiList'][$normalisasi[0]-1][4]=$normalisasi[2];

        }
        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pulls/normalisasi', $data);
    }
    public function editNormalisasi($tahun, $bulan){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('normalisasis_model');

        $data['title'] = 'Key Performance Indicator';
        $data['subtitle'] = 'Formulir';
        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;

        $data['normalisasis'] = $this->normalisasis_model->getDataByMonth($tahun, $bulan);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('bulan', 'Indikator', 'required');
        $this->form_validation->set_rules('lalin_1', 'Volume Lalu Lintas Golongan 1', 'required');
        $this->form_validation->set_rules('lalin_2', 'Volume Lalu Lintas Golongan 2', 'required');
        $this->form_validation->set_rules('lalin_3', 'Volume Lalu Lintas Golongan 3', 'required');
        $this->form_validation->set_rules('lalin_4', 'Volume Lalu Lintas Golongan 4', 'required');
        $this->form_validation->set_rules('lalin_5', 'Volume Lalu Lintas Golongan 5', 'required');

        $this->form_validation->set_rules('pendapatan_1', 'Pendapatan Golongan 1', 'required');
        $this->form_validation->set_rules('pendapatan_2', 'Pendapatan Golongan 2', 'required');
        $this->form_validation->set_rules('pendapatan_3', 'Pendapatan Golongan 3', 'required');
        $this->form_validation->set_rules('pendapatan_4', 'Pendapatan Golongan 4', 'required');
        $this->form_validation->set_rules('pendapatan_5', 'Pendapatan Golongan 5', 'required');

        $normalisasi = $this->normalisasis_model->getDataByMonth($tahun, $bulan);
        if ($this->form_validation->run() === FALSE){
            if( $normalisasi == null){
                $normalisasi = $this->normalisasis_model->getDataByMonth($tahun, $bulan);

            }
            $data['normalisasis'] = $normalisasi;
            $this->template->load('wrapper', 'contents' , 'pulls/editNormalisasi', $data);
        }else{
            $data['normalisasis'] = $this->normalisasis_model->update_normalisasi();
            redirect(base_url('pulls/normalisasi/'));
        }
    }
}