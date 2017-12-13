<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Initial_session {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
    // Proteksi halaman
    public function set_tahun($tahun) {
        $this->CI->session->set_userdata('tahun', $tahun);
        redirect(base_url('home'));

    }

    public function cek_tahun(){
        if($this->CI->session->userdata('tahun') == '') {
            $this->CI->session->set_userdata('tahun', 2017);
            redirect(base_url('home'));
        }
    }

}