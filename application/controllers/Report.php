<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kpis_model');
        $this->load->model('masterkpis_model');
        $this->load->helper('url_helper');
        $this->CI =& get_instance();
        header("Access-Control-Allow-Origin: *");
    }

    public function index()
    {
        $data['title'] = 'Dashboard Monitoring KPI';
        $data['subtitle'] = 'Daftar Transaksi';
        $data['tahun'] = $_SESSION['tahun'];

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'report/index', $data);
    }
    public function download(){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $writer->save('assets/xls/hello world.xlsx');

        $filename="assets/xls/hello world.xlsx"; //<-- specify the image  file
        if(file_exists($filename)){
            $mime = mime_content_type($filename); //<-- detect file type
            header('Content-Length: '.filesize($filename)); //<-- sends filesize header
            header("Content-Type: $mime"); //<-- send mime-type header
            header('Content-Disposition: inline; filename="'.$filename.'";'); //<-- sends filename header
            readfile($filename); //<--reads and outputs the file onto the output buffer
            die(); //<--cleanup
        }

    }
}