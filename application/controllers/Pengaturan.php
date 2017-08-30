<?php
/**
 * Created by PhpStorm.
 * User: giriw
 * Date: 8/3/2017
 * Time: 4:24 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengaturan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('departement_model');
        $this->load->model('seksi_model');
        $this->load->model('jabatan_model');
        $this->load->model('posisi_model');
        $this->load->model('role_model');
        $this->load->helper('url_helper');
        header("Access-Control-Allow-Origin: *");
    }

    public function departement()
    {
        $data['title'] = 'Daftar Departement';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pengaturan/departement', $data);
    }

    public function seksi()
    {
        $data['title'] = 'Daftar Seksi';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pengaturan/seksi', $data);
    }

    public function jabatan()
    {
        $data['title'] = 'Daftar Jabatan';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pengaturan/jabatan', $data);
    }

    public function posisi()
    {
        $data['title'] = 'Daftar Posisi';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pengaturan/posisi', $data);
    }

    public function role()
    {
        $data['title'] = 'Daftar Role';

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'pengaturan/role', $data);
    }
}