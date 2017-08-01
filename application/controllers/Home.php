<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index login
	public function index() {
        $data['title'] = 'Daftar Pegawai';
        $this->template->load('wrapper', 'contents' , 'home/index', $data);
    }
	
	// Fungsi lain
	
}