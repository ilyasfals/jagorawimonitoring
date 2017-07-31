<?php
class Home extends CI_Controller {
    
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $data = array();
        $this->template->set('title', 'Home');
        $this->template->load('default_layout', 'contents' , 'home', $data);
    }
    
    public function about()
    {
        $data = array();
        $this->template->set('title', 'about');
        $this->template->load('default_layout', 'contents' , 'about', $data);
    }
}