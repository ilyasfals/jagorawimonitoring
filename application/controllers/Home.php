<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Beranda',
						'isi'	=> 'Home/index');
		$this->load->view('layout/wrapper', $data);
	}
	
	// Fungsi lain
	
}