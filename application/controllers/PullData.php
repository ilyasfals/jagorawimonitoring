<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PullData extends CI_Controller {

    public function doPull()
    {

        $this->load->helper('file');
        $DB1 = $this->load->database('default', TRUE);

        $maxid = 0;
        $row = $this->db->query('SELECT MAX(id) AS maxid FROM pcds_tbltrx_open where id < 1844674407370955101')->row();
        if ($row) {
            $maxid = $row->maxid;
        }

        //GET DATA
        $this->db = $this->load->database('other', TRUE);
        $this->load->dbutil();

        $query = $this->db->query('select id, id_shift, kode_trx, resi, shift, periode, id_cabang_trx, id_gerbang_trx, no_gardu, gol, tarif, tgl_trx, jam_trx, uid_card, tkn_reset, kode_dinas, backup_status
                                    from tbltrx_open where id >'.$maxid.' limit 10000');
        $delimiter = ";";
        $newline = "\r\n";
        $data  = $this->dbutil->csv_from_result($query, $delimiter, $newline);

        $folder = "/tmp/data";
        if ( ! write_file($folder.'/file.csv', $data)){
            echo 'Unable to write the file';
        }
        else{
            echo 'File written!';
        }

        //END OFF GET DATA

        //INSERT DATA
        $sqlInsert ='LOAD DATA INFILE \''.$folder.'/file.csv\'
            INTO TABLE pcds_tbltrx_open
            FIELDS TERMINATED BY \';\'
            OPTIONALLY ENCLOSED BY \'"\' 
            LINES TERMINATED BY \'\r\n\'
            IGNORE 1 LINES 
            (id, id_shift, kode_trx, resi, shift, periode, id_cabang_trx, id_gerbang_trx, no_gardu, gol, tarif, tgl_trx, jam_trx, uid_card, tkn_reset, kode_dinas, backup_status)';


        var_dump($sqlInsert);

        $DB1->query($sqlInsert);


        $this->db = $this->load->database('default', TRUE);
        $this->load->dbutil();

        $this->load->model('pulllog_model');
        $this->pulllog_model->set_pull_log();
        $now = DateTime::createFromFormat('U.u', microtime(true));


        $this->load->helper('file');
        $DB1 = $this->load->database('default', TRUE);
        $currentYear = date('Y');

        //INSERT DATA
        $sqlInsert ='REPLACE INTO rekap_transaksi (tahun, bulan, golongan, gerbang, gerbang_s, nilai, jumlah)
            select EXTRACT(year FROM tgl_trx) as tahun, EXTRACT(month FROM tgl_trx) as bulan, gol, 
            id_gerbang_trx, id_gerbang_trx,
            sum(tarif) as nilai, count(id) as jumlah 
            from pcds_tbltrx_open 
            group by tahun, bulan, gol, id_gerbang_trx
            order by tahun, bulan, gol, id_gerbang_trx';

        $queryLastTenMinutes = 'update lasttenminutes set last=current, current =  (select sum(jumlah) from rekap_transaksi where tahun='.$currentYear.')';

        var_dump($queryLastTenMinutes);
        $DB1->query($sqlInsert);
        $DB1->query($queryLastTenMinutes);


        $this->db = $this->load->database('default', TRUE);
        $this->load->dbutil();

        $this->load->model('pulllog_model');
        $this->pulllog_model->set_pull_log_rekap();
        echo 'Tarik data pada :'.$now->format("m-d-Y H:i:s.u");

    }
}