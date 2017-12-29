<?php
/**
 * Created by PhpStorm.
 * User: ILYAS
 * Date: 12/28/17
 * Time: 11:07 AM
 */

/* @property phpexcel_model $phpexcel_model */

require 'vendor/autoload.php';

class Phpexcel extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('phpexcel_model');

    }

    function index()
    {
        $data['users'] = $this->phpexcel_model->get_users();

        $this->view('content/phpexcel', $data);
    }
}