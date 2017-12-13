<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionManagements extends CI_Controller {
    public function setTahun($tahun = null){
        if ($tahun ==null){

        }else{
            $this->initial_session->set_tahun($tahun, base_url('home'));
        }

    }
}