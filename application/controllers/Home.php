<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index login
	public function index() {
        $data['title'] = 'Dashboard Monitoring KPI';
        $this->template->load('wrapper', 'contents' , 'home/index', $data);
    }
    public function createNews() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $id=$this->uri->segment(3);
        $data['title'] = 'Formulir Berita';

        $config['upload_path']          = 'assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('banner')){
            $error = array('error' => $this->upload->display_errors());
            $this->template->load('wrapper', 'contents' , 'home/createnews', $data);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
        }

        if($this->uri->segment(3)=="0"){
            $this->load->model('news_model');
            $data['news'] = $this->news_model->get_news();
        }
        else{
            $this->load->model('news_model');
            $data['news'] = $this->news_model->get_news($id);

        }
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('subtitle', 'subjudul', 'required');
        $this->form_validation->set_rules('content', 'isi', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'home/createnews', $data);
        }
        else {
            if($this->input->post('id')>0){
                $this->news_model->update_news();
            }
            else{
                $this->news_model->create_news();
            }
            redirect('home/index/');
        }
    }
	
	// Fungsi lain
	
}