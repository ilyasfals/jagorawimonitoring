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
        $data['title'] = 'Laporan';
        $data['subtitle'] = 'Rekap Transaksi';
        $data['tahun'] = $_SESSION['tahun'];

        $this->load->library('parser');
        $this->template->load('wrapper', 'contents' , 'report/index', $data);
    }
    public function download(){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('B1', 'Rekapitulasi Data Transaksi');
        $sheet->setCellValue('B3', 'Realisasi Lalu Lintas');
        $sheet->setCellValue('B4', 'Cabang Jagorawi');

        for($i=0; $i<12 ; $i++) {
            $sheet->setCellValue('B6', 'Gerbang');
            $sheet->setCellValue('C6', 'Januari');
            $sheet->setCellValue('D6', 'Februari');
            $sheet->setCellValue('E6', 'Maret');
            $sheet->setCellValue('F6', 'April');
            $sheet->setCellValue('G6', 'Mei');
            $sheet->setCellValue('H6', 'Juni');
            $sheet->setCellValue('I6', 'Juli');
            $sheet->setCellValue('J6', 'Agustus');
            $sheet->setCellValue('K6', 'September');
            $sheet->setCellValue('L6', 'Oktober');
            $sheet->setCellValue('M6', 'November');
            $sheet->setCellValue('N6', 'Desember');
        }
        $rowNumber = 6;

        $year = $_SESSION['tahun'];
        $sql = 'select nama_gerbang, bulan, nilai, jumlah, golongan 
                from rekap_transaksi 
                inner join pcds_tblgerbang g on kode_gerbang = gerbang where tahun = '.$year.'
                order by nama_gerbang, bulan';

        $list = $this->db->query($sql);
        $currentGerbang = "";
        foreach ($list->result() as $row) {
            $columnMonth = $row->bulan;
            $nilai = $row->nilai;
            if($currentGerbang!==$row->nama_gerbang){
                $rowNumber=$rowNumber+1;
                $currentGerbang = $row->nama_gerbang;

                //inisial data 0
                for($i=0; $i<12 ; $i++) {
                    $sheet->setCellValue("C$rowNumber", '0');
                    $sheet->setCellValue("D$rowNumber", '0');
                    $sheet->setCellValue("E$rowNumber", '0');
                    $sheet->setCellValue("F$rowNumber", '0');
                    $sheet->setCellValue("G$rowNumber", '0');
                    $sheet->setCellValue("H$rowNumber", '0');
                    $sheet->setCellValue("I$rowNumber", '0');
                    $sheet->setCellValue("J$rowNumber", '0');
                    $sheet->setCellValue("K$rowNumber", '0');
                    $sheet->setCellValue("L$rowNumber", '0');
                    $sheet->setCellValue("M$rowNumber", '0');
                    $sheet->setCellValue("N$rowNumber", '0');
                }
            }
            $sheet->setCellValue("B$rowNumber", $currentGerbang);

            if($columnMonth ==1)  $sheet->setCellValue("C$rowNumber", $nilai);
            if($columnMonth ==2)  $sheet->setCellValue("D$rowNumber", $nilai);
            if($columnMonth ==3)  $sheet->setCellValue("E$rowNumber", $nilai);
            if($columnMonth ==4)  $sheet->setCellValue("F$rowNumber", $nilai);
            if($columnMonth ==5)  $sheet->setCellValue("G$rowNumber", $nilai);
            if($columnMonth ==6)  $sheet->setCellValue("H$rowNumber", $nilai);
            if($columnMonth ==7)  $sheet->setCellValue("I$rowNumber", $nilai);
            if($columnMonth ==8)  $sheet->setCellValue("J$rowNumber", $nilai);
            if($columnMonth ==9)  $sheet->setCellValue("K$rowNumber", $nilai);
            if($columnMonth ==10)  $sheet->setCellValue("L$rowNumber", $nilai);
            if($columnMonth ==11)  $sheet->setCellValue("M$rowNumber", $nilai);
            if($columnMonth ==12)  $sheet->setCellValue("N$rowNumber", $nilai);

            //Nama Gerbang
            //$sheet->setCellValue('B6', 'Gerbang');

        }




        $writer = new Xlsx($spreadsheet);
        $writer->save('assets/xls/Rekap Transaksi.xlsx');

        $filename="assets/xls/Rekap Transaksi.xlsx"; //<-- specify the image  file
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