<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RekapJob extends CI_Controller {

    public function doETL()
    {

        $this->load->helper('file');
        $DB1 = $this->load->database('default', TRUE);

        //INSERT DATA
        $sqlInsert ='REPLACE INTO rekap_transaksi (tahun, bulan, golongan, gerbang, gerbang_s, nilai, jumlah)
                        select EXTRACT(year FROM tgl_trx) as tahun, EXTRACT(month FROM tgl_trx) as bulan, gol, 
                        id_gerbang_trx, id_gerbang_trx,
                        sum(tarif) as nilai, count(id) as jumlah 
                        from pcds_tbltrx_open 
                        group by tahun, bulan, gol, id_gerbang_trx
                        order by tahun, bulan, gol, id_gerbang_trx';

        var_dump($sqlInsert);

        $DB1->query($sqlInsert);


        $this->db = $this->load->database('default', TRUE);
        $this->load->dbutil();

        $this->load->model('pulllog_model');
        $this->pulllog_model->set_pull_log_rekap();
        $now = DateTime::createFromFormat('U.u', microtime(true));
        echo 'Tarik data pada :'.$now->format("m-d-Y H:i:s.u");

    }
}