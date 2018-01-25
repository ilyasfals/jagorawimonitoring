<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	
	// Index login
	public function index() {
        $data['title'] = 'Pengguna';
        $this->load->model('users_model');
        //$data['list_banner'] = $this->users_model->getListBanner();
        $this->template->load('wrapper', 'contents' , 'user/index', $data);
    }

    public function profil() {
        $data['title'] = 'Profil';
        $this->load->model('users_model');
        //$data['list_banner'] = $this->users_model->getListBanner();
        $this->template->load('wrapper', 'contents' , 'user/profil', $data);
    }

    public function createUsers() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $id=$this->uri->segment(3);
        $data['title'] = 'Buat Pengguna';
        $this->load->model('users_model');
        $data['list_role'] = $this->users_model->get_option();
        $data['list_user'] = $this->users_model->get_users($id);
        $config['upload_path']          = 'assets/images/banner';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);



        if($this->uri->segment(3)=="0"){
            $this->load->model('users_model');
            $data['users'] = $this->users_model->get_users();
        }
        else{
            $this->load->model('users_model');
            $data['users'] = $this->users_model->get_users($id);

        }
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');
        $this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'user/createusers', $data);
        }
        else {
            if($this->input->post('id_user')>0){
                if ( ! $this->upload->do_upload('banner')){
                    $error = array('error' => $this->upload->display_errors());
                    $this->template->load('wrapper', 'contents' , 'user/createusers', $data);
                }
                else{

                    //$data = array('upload_data' => $this->upload->data());
                   /* $file_data = $this->upload->data();
                    $file_name =   $file_data['file_name'];
                    $data = array(
                        'title' => $this->input->post('title'),
                        'subtitle' => $this->input->post('subtitle'),
                        'content' => $this->input->post('content'),
                        'banner' => $file_name,
                        'is_active' => $this->input->post('is_active')
                    );*/
                }
                //print_r($data);
                $this->users_model->update_users();
            }
            else{
                if ( ! $this->upload->do_upload('banner')){
                    $error = array('error' => $this->upload->display_errors());
                    $this->template->load('wrapper', 'contents' , 'user/createusers', $data);
                }
                else{

                    //$data = array('upload_data' => $this->upload->data());
                   /* $file_data = $this->upload->data();
                    $file_name =   $file_data['file_name'];
                    $data = array(
                        'title' => $this->input->post('title'),
                        'subtitle' => $this->input->post('subtitle'),
                        'content' => $this->input->post('content'),
                        'banner' => $file_name,
                        'is_active' => $this->input->post('is_active')
                    );
                }*/
                //print_r($this->upload->data());
                }
                $this->users_model->create_users();
            }
            redirect(base_url('user/index/'));
        }
    }


    public function ubahPassword() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $id=$this->uri->segment(3);
        $data['title'] = 'Ubah Password';
        $this->load->model('users_model');
        $data['list_role'] = $this->users_model->get_option();
        $data['list_user'] = $this->users_model->get_users($id);
        $data['errorMsg'] = '';

        if($this->uri->segment(3)=="0"){
            $this->load->model('users_model');
            $data['users'] = $this->users_model->get_users();
        }
        else{
            $this->load->model('users_model');
            $data['users'] = $this->users_model->get_users($id);

        }
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('repassword', 'repassword', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->template->load('wrapper', 'contents' , 'user/ubahpassword', $data);
        }
        else {
            $password = $this->input->post('password');
            $repassword = $this->input->post('repassword');
            if ($password==null||$password=="")
            {
                $data['errorMsg'] = 'Maaf password tidak boleh kosong';
                $this->template->load('wrapper', 'contents' , 'user/ubahpassword', $data);
            }
            else{
                if ($password!=$repassword)
                {
                    $data['errorMsg'] = 'Maaf password yang anda masukan tidak sesuai';
                    $this->template->load('wrapper', 'contents' , 'user/ubahpassword', $data);
                }
                else{
                    $this->users_model->update_password();
                    redirect(base_url('home'));
                }
            }
        }
    }


    public function deleteUsers(){
        $id=$this->uri->segment(3);
        $this->load->model('users_model');
        $this->users_model->delete_users($id);
        redirect(base_url('user/index/'));

    }
}