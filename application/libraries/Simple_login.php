<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($username, $password) {
		$query = $this->CI->db->get_where('users',array('username'=>$username,'password' => $password));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT employees.npp, employees.nama, role FROM users 
                                            INNER JOIN employees ON users.id_employees = employees.id_employees
                                            WHERE  username = "'.$username.'"');


			$admin 	= $row->row();
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('password', $password);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('npp', $admin->npp);
			$this->CI->session->set_userdata('nama', $admin->nama);
			$this->CI->session->set_userdata('role', $admin->role);
			redirect(base_url('home'));
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... Username/password salah');
			redirect(base_url('login'));
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect(base_url('login'));
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('login'));
	}
}