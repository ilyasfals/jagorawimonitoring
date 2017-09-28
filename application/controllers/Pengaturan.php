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

    public function createDepartement()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $id=$this->uri->segment(3);
        if($this->uri->segment(3)=="0"){
            $data['title'] = 'Tambah Departement';
            $this->load->model('departement_model');
            $data['departement'] = $this->departement_model->get_department();
        }
        else{
            $data['title'] = 'Ubah Departement';
            $this->load->model('departement_model');
            $data['departement'] = $this->departement_model->get_departmentID($id);

        }

        $data['id'] = $id;
        $this->form_validation->set_rules('kode', 'kode', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'pengaturan/createdepartement', $data);
        }
        else {
            if($this->input->post('id')>0){
                $this->departement_model->update_departement();
            }
            else{
                $this->departement_model->set_departement();
            }
            redirect('pengaturan/departement/');
        }
    }

    public function deleteDepartement($id){
        $this->db->where('id', $id);
        $this->db->delete('departement');
        redirect('pengaturan/departement/');
    }

    public function createSeksi()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $id=$this->uri->segment(3);
        if($this->uri->segment(3)=="0"){
            $data['title'] = 'Tambah Seksi';
            $this->load->model('seksi_model');
            $data['seksi'] = $this->seksi_model->get_seksi();
        }
        else{
            $data['title'] = 'Ubah seksi';
            $this->load->model('seksi_model');
            $data['seksi'] = $this->seksi_model->get_seksiID($id);

        }
        $data['id'] = $id;
        $this->form_validation->set_rules('kode', 'kode', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'pengaturan/createseksi', $data);
        }
        else {
            if($this->input->post('id')>0){
                $this->seksi_model->update_seksi();
            }
            else{
                $this->seksi_model->set_seksi();
            }
            redirect('pengaturan/seksi/');
        }
    }

    public function deleteSeksi($id){
        $this->db->where('id', $id);
        $this->db->delete('seksi');
        redirect('pengaturan/seksi/');
    }

    public function createJabatan()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $id=$this->uri->segment(3);
        if($this->uri->segment(3)=="0"){
            $data['title'] = 'Tambah Jabatan';
            $this->load->model('jabatan_model');
            $data['jabatan'] = $this->jabatan_model->get_jabatan();
        }
        else{
            $data['title'] = 'Ubah Jabatan';
            $this->load->model('jabatan_model');
            $data['jabatan'] = $this->jabatan_model->get_jabatanID($id);

        }

        $data['id'] = $id;
        $this->form_validation->set_rules('kode', 'kode', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'pengaturan/createjabatan', $data);
        }
        else {
            if($this->input->post('id')>0){
                $this->jabatan_model->update_jabatan();
            }
            else{
                $this->jabatan_model->set_jabatan();
            }
            redirect('pengaturan/jabatan/');
        }
    }


    public function deleteJabatan($id){
        $this->db->where('id', $id);
        $this->db->delete('jabatan');
        redirect('pengaturan/jabatan/');
    }

    public function createPosisi()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $id=$this->uri->segment(3);
        if($this->uri->segment(3)=="0"){
            $data['title'] = 'Tambah Posisi';
            $this->load->model('posisi_model');
            $data['posisi'] = $this->posisi_model->get_posisi();
        }
        else{
            $data['title'] = 'Ubah posisi';
            $this->load->model('posisi_model');
            $data['posisi'] = $this->posisi_model->get_posisiID($id);

        }
        $data['id'] = $id;
        $this->form_validation->set_rules('kode', 'kode', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'pengaturan/createposisi', $data);
        }
        else {
            if($this->input->post('id')>0){
                $this->posisi_model->update_posisi();
            }
            else{
                $this->posisi_model->set_posisi();
            }
            redirect('pengaturan/posisi/');
         }
    }

    public function deletePosisi($id){
        $this->db->where('id', $id);
        $this->db->delete('posisi');
        redirect('pengaturan/posisi/');
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

    function listDepartement()
    {
        $departement = $this->model->departement_model->get_list(); //array of members
        $this->load->view('createdepartement', $departement); // load members in view
    }

    function listJabatan()
    {
        $jabatan = $this->model->jabatan_model->get_list(); //array of members
        $this->load->view('createjabatan', $jabatan); // load members in view
    }

    function listSeksi()
    {
        $seksi = $this->model->seksi_model->get_list(); //array of members
        $this->load->view('createseksi', $seksi); // load members in view
    }

    function listPosisi()
    {
        $posisi = $this->model->posisi_model->get_list(); //array of members
        $this->load->view('createseksi', $posisi); // load members in view
    }
}