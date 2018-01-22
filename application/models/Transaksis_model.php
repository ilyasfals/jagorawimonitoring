<?php
class Transaksis_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_transaksi($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('pcds_tbltrx_open');
            return $query->result_array();
        }

        $query = $this->db->get_where('pcds_tbltrx_open', array('id' => $id));
        return $query->row_array();
    }

    public function get_rekap_transaksi_year($year = 0){
        if($year == 0){
            $sql = 'select count(id) as jumlah, sum(tarif) as nilai  from pcds_tbltrx_open';
            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $transaksi['jumlah'] = $row->jumlah;
                $transaksi['nilai'] = $row->nilai;
            }

            //Rekap bulanan
            $sql = 'select EXTRACT(month FROM tgl_trx) as bulan, sum(tarif) as nilai, count(id) as jumlah from pcds_tbltrx_open group by bulan order by bulan';
            $list = $this->db->query($sql);
            $transaksi['bulan_nama'] = array();
            $transaksi['bulan_index'] = array();
            $transaksi['bulan_jumlah'] = array();
            $transaksi['bulan_nilai'] = array();
            $transaksi['bulan_nilai_kumulatif'] = array();


            $iRekap = 0;
            foreach ($list->result() as $row) {
                array_push($transaksi['bulan_index'], $row->bulan);
                array_push($transaksi['bulan_jumlah'], $row->jumlah);
                array_push($transaksi['bulan_nilai'], $row->nilai);
                array_push($transaksi['bulan_nilai_kumulatif'], $transaksi['bulan_nilai_kumulatif'][$iRekap] + $transaksi['bulan_nilai'][$iRekap+1]);
                $iRekap++;
            }



            //LOOP Sebanyak 12 dikurang jumlah bulan yang ada data
            $jumlahBulan = sizeof($transaksi['bulan_index']);
            for ($bulanTambahan = sizeof($transaksi['bulan_index'])+1; $bulanTambahan <= 12; $bulanTambahan++) {
                array_push($transaksi['bulan_index'], $bulanTambahan);
                array_push($transaksi['bulan_jumlah'], 0);
                array_push($transaksi['bulan_nilai'], 0);
                array_push($transaksi['bulan_nilai_kumulatif'], $transaksi['bulan_nilai_kumulatif'][$jumlahBulan]);
            }
            //die();


            //Rekap Bulanan Per Golongan
            $transaksi['bulan_jumlah_gol1'] = array();
            $transaksi['bulan_jumlah_gol2'] = array();
            $transaksi['bulan_jumlah_gol3'] = array();
            $transaksi['bulan_jumlah_gol4'] = array();
            $transaksi['bulan_jumlah_gol5'] = array();

            $transaksi['bulan_nilai_gol1'] = array();
            $transaksi['bulan_nilai_gol2'] = array();
            $transaksi['bulan_nilai_gol3'] = array();
            $transaksi['bulan_nilai_gol4'] = array();
            $transaksi['bulan_nilai_gol5'] = array();

            $transaksi['total_jumlah'] = array();
            $transaksi['total_nilai'] = array();


            for ($goli = 1; $goli <= 5; $goli++) {
                for ($x = 1; $x <= 12; $x++) {
                    array_push($transaksi['bulan_jumlah_gol'.$goli], 0);
                    array_push($transaksi['bulan_nilai_gol'.$goli], 0);
                }

            }

            $sql = 'select EXTRACT(month FROM tgl_trx) as bulan, gol, sum(tarif) as nilai, count(id) as jumlah from pcds_tbltrx_open group by bulan,gol order by bulan,gol';
            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $transaksi['bulan_nilai_gol'.$row->gol][$row->bulan] =  (int)$row->nilai;
                $transaksi['bulan_jumlah_gol'.$row->gol][$row->bulan] =  (int)$row->jumlah;
                $transaksi['total_jumlah'][$row->gol-1] =  (int)$transaksi['total_jumlah'] + (int)$row->jumlah;
                $transaksi['total_nilai'][$row->gol-1] =  (int)$transaksi['total_nilai'] + (int)$row->nilai;
            }

            $sql = 'select target_1, target_2, target_3, target_4, target_5, target_6, target_7, target_8, target_9, target_10, target_11, target_12 from kpi_transaksi';
            $list = $this->db->query($sql);

            $transaksi['target_transaksi'] = array();
            $transaksi['target_transaksi_kumulatif'] = array();
            $transaksi['delta_transaksi'] = array();


            array_push($transaksi['bulan_nama'], "Nama Bulan");
            for ($x = 1; $x <= 12; $x++) {
                array_push($transaksi['target_transaksi'], 0);
                array_push($transaksi['target_transaksi_kumulatif'], 0);
                array_push($transaksi['delta_transaksi'], 0);
                array_push($transaksi['bulan_nama'], $this->getNameMonthFromNumberIna($x));
            }


            foreach ($list->result() as $row) {
                $transaksi['target_transaksi'][1] = (int)$row->target_1;
                $transaksi['target_transaksi'][2] = (int)$row->target_2;
                $transaksi['target_transaksi'][3] = (int)$row->target_3;
                $transaksi['target_transaksi'][4] = (int)$row->target_4;
                $transaksi['target_transaksi'][5] = (int)$row->target_5;
                $transaksi['target_transaksi'][6] = (int)$row->target_6;
                $transaksi['target_transaksi'][7] = (int)$row->target_7;
                $transaksi['target_transaksi'][8] = (int)$row->target_8;
                $transaksi['target_transaksi'][9] = (int)$row->target_9;
                $transaksi['target_transaksi'][10] = (int)$row->target_10;
                $transaksi['target_transaksi'][11] = (int)$row->target_11;
                $transaksi['target_transaksi'][12] = (int)$row->target_12;
            }
            for ($x = 1; $x <= 12; $x++) {
                $transaksi['delta_transaksi'][$x] = $transaksi['bulan_nilai'][$x]-$transaksi['target_transaksi'][$x];
                $transaksi['target_transaksi_kumulatif'][$x] = $transaksi['target_transaksi_kumulatif'][$x-1]+$transaksi['target_transaksi'][$x];
            }

            $sql = 'select max(tgl_trx) as last from pcds_tbltrx_open'; //FORMAT 2017-09-28
            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $transaksi['last_date_trx'] = $row->last;
            }

           // die();

//            var_dump($transaksi['bulan_nilai_kumulatif']);

//            die();

            return $transaksi;
        }else{
            $sql = 'select count(id) as jumlah, sum(tarif) as nilai  from pcds_tbltrx_open where EXTRACT(YEAR FROM tgl_trx) = '.$year;

            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $transaksi['jumlah'] = $row->jumlah;
                $transaksi['nilai'] = $row->nilai;
            }

            //Rekap bulanan
            $sql = 'select EXTRACT(month FROM tgl_trx) as bulan, sum(tarif) as nilai, count(id) as jumlah from pcds_tbltrx_open where EXTRACT(YEAR FROM tgl_trx) = '.$year.' group by bulan order by bulan';
            $list = $this->db->query($sql);
            $transaksi['bulan_nama'] = array();
            $transaksi['bulan_index'] = array();
            $transaksi['bulan_jumlah'] = array();
            $transaksi['bulan_nilai'] = array();
            $transaksi['bulan_nilai_kumulatif'] = array();


            $iRekap = 0;
            foreach ($list->result() as $row) {
                array_push($transaksi['bulan_index'], $row->bulan);
                array_push($transaksi['bulan_jumlah'], $row->jumlah);
                array_push($transaksi['bulan_nilai'], $row->nilai);
                if($iRekap==0)
                    array_push($transaksi['bulan_nilai_kumulatif'], $transaksi['bulan_nilai'][$iRekap]);
                else
                    array_push($transaksi['bulan_nilai_kumulatif'], $transaksi['bulan_nilai_kumulatif'][$iRekap-1] + $transaksi['bulan_nilai'][$iRekap]);
                $iRekap++;
            }



            //LOOP Sebanyak 12 dikurang jumlah bulan yang ada data
            $jumlahBulan = sizeof($transaksi['bulan_index']);
//            var_dump($jumlahBulan);die();
            for ($bulanTambahan = $jumlahBulan; $bulanTambahan < 12; $bulanTambahan++) {
                array_push($transaksi['bulan_index'], $bulanTambahan);
                array_push($transaksi['bulan_jumlah'], 0);
                array_push($transaksi['bulan_nilai'], 0);
                array_push($transaksi['bulan_nilai_kumulatif'], $transaksi['bulan_nilai_kumulatif'][$jumlahBulan-1]);
            }
            //die();


            //Rekap Bulanan Per Golongan
            $transaksi['bulan_jumlah_gol1'] = array();
            $transaksi['bulan_jumlah_gol2'] = array();
            $transaksi['bulan_jumlah_gol3'] = array();
            $transaksi['bulan_jumlah_gol4'] = array();
            $transaksi['bulan_jumlah_gol5'] = array();

            $transaksi['bulan_nilai_gol1'] = array();
            $transaksi['bulan_nilai_gol2'] = array();
            $transaksi['bulan_nilai_gol3'] = array();
            $transaksi['bulan_nilai_gol4'] = array();
            $transaksi['bulan_nilai_gol5'] = array();


            $transaksi['total_jumlah'] = array();
            $transaksi['total_nilai'] = array();


            for ($goli = 1; $goli <= 5; $goli++) {
                for ($x = 0; $x < 12; $x++) {
                    array_push($transaksi['bulan_jumlah_gol'.$goli], 0);
                    array_push($transaksi['bulan_nilai_gol'.$goli], 0);
                }

            }

            $sql = 'select EXTRACT(month FROM tgl_trx) as bulan, gol, sum(tarif) as nilai, count(id) as jumlah from pcds_tbltrx_open where EXTRACT(YEAR FROM tgl_trx) = '.$year .' group by bulan,gol order by bulan,gol';
            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $indexBulan = $row->bulan-1;
                $transaksi['bulan_nilai_gol'.$row->gol][$indexBulan] =  (int)$row->nilai;
                $transaksi['bulan_jumlah_gol'.$row->gol][$indexBulan] =  (int)$row->jumlah;
                $transaksi['total_jumlah'][$row->gol-1] =  (int)$transaksi['total_jumlah'] + (int)$row->jumlah;
                $transaksi['total_nilai'][$row->gol-1] =  (int)$transaksi['total_nilai'] + (int)$row->nilai;
            }

            $sql = 'select target_1, target_2, target_3, target_4, target_5, target_6, target_7, target_8, target_9, target_10, target_11, target_12 from kpi_transaksi where tahun ='.$year;
            $list = $this->db->query($sql);

            $transaksi['target_transaksi'] = array();
            $transaksi['target_transaksi_kumulatif'] = array();
            $transaksi['delta_transaksi'] = array();


            for ($x = 0; $x < 12; $x++) {
                array_push($transaksi['target_transaksi'], 0);
                array_push($transaksi['target_transaksi_kumulatif'], 0);
                array_push($transaksi['delta_transaksi'], 0);
                array_push($transaksi['bulan_nama'], $this->getNameMonthFromNumberIna($x));
            }


            foreach ($list->result() as $row) {
                $transaksi['target_transaksi'][0] = (int)$row->target_1;
                $transaksi['target_transaksi'][1] = (int)$row->target_2;
                $transaksi['target_transaksi'][2] = (int)$row->target_3;
                $transaksi['target_transaksi'][3] = (int)$row->target_4;
                $transaksi['target_transaksi'][4] = (int)$row->target_5;
                $transaksi['target_transaksi'][5] = (int)$row->target_6;
                $transaksi['target_transaksi'][6] = (int)$row->target_7;
                $transaksi['target_transaksi'][7] = (int)$row->target_8;
                $transaksi['target_transaksi'][8] = (int)$row->target_9;
                $transaksi['target_transaksi'][9] = (int)$row->target_10;
                $transaksi['target_transaksi'][10] = (int)$row->target_11;
                $transaksi['target_transaksi'][11] = (int)$row->target_12;
            }
            for ($x = 0; $x < 12; $x++) {
                $transaksi['delta_transaksi'][$x] = $transaksi['bulan_nilai'][$x]-$transaksi['target_transaksi'][$x];
                if($x==0)
                    $transaksi['target_transaksi_kumulatif'][$x] = $transaksi['target_transaksi'][$x];
                else
                    $transaksi['target_transaksi_kumulatif'][$x] = $transaksi['target_transaksi_kumulatif'][$x-1]+$transaksi['target_transaksi'][$x];
            }

            $sql = 'select max(tgl_trx) as last from pcds_tbltrx_open where EXTRACT(YEAR FROM tgl_trx) = '.$year; //FORMAT 2017-09-28
            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $transaksi['last_date_trx'] = $row->last;
            }

            // die();

//            var_dump($transaksi['bulan_nilai_kumulatif']);

//            die();

            return $transaksi;
        }

    }

    public function getTransaksiNormalisasi($year = 0){

        $transaksi['row_rekap_transaksi'] = array();


        for ($x = 0; $x < 12; $x++) {
            $rekap_bulan =  array();
            array_push($rekap_bulan, $this->getNameMonthFromNumberIna($x+1));
            array_push($rekap_bulan, 0);
            array_push($rekap_bulan, 0);
            array_push($transaksi['row_rekap_transaksi'], $rekap_bulan);
        }

        $sql = 'select EXTRACT(year FROM tgl_trx) as tahun, EXTRACT(month FROM tgl_trx) as bulan,
                sum(tarif) as nilai, count(id) as jumlah 
                from pcds_tbltrx_open 
                where EXTRACT(year FROM tgl_trx) = '.$year.'
                group by tahun, bulan
                order by tahun, bulan';

        $list = $this->db->query($sql);

        $x = 0;
        foreach ($list->result() as $row) {
            $transaksi['row_rekap_transaksi'][$row->bulan-1][0] = $this->getNameMonthFromNumberIna($row->bulan);
            $transaksi['row_rekap_transaksi'][$row->bulan-1][1] = $row->nilai;
            $transaksi['row_rekap_transaksi'][$row->bulan-1][2] = $row->jumlah;
            $x++;
        }

        return $transaksi;
    }

    public function getNameMonthFromNumberIna($number = 0){
        if($number >=1 && $number <=12){
            switch ($number) {
                case 1:
                    return 'Januari';
                    break;
                case 2:
                    return 'Februari';
                    break;
                case 3:
                    return 'Maret';
                    break;
                case 4:
                    return 'April';
                    break;
                case 5:
                    return 'Mei';
                    break;
                case 6:
                    return 'Juni';
                    break;
                case 7:
                    return 'Juli';
                    break;
                case 8:
                    return 'Agustus';
                    break;
                case 9:
                    return 'September';
                    break;
                case 10:
                    return 'Oktober';
                    break;
                case 11:
                    return 'November';
                    break;
                case 12:
                    return 'Desember';
                    break;
                default:
                    break;
            }
        }
    }
}