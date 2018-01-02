<?php
class RekapTransaksis_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_rekap_transaksi($id = FALSE)
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
           return null;
        }else{
            $sql = 'select sum(jumlah) as jumlah, sum(nilai) as nilai from rekap_transaksi where tahun = '.$year;

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
            $transaksi['bulan_jumlah'] = array("Jumlah Transaksi");
            $transaksi['bulan_nilai'] = array("Nilai Transaksi");
            $transaksi['bulan_nilai_kumulatif'] = array("Realisasi Transaksi Kumulatif");


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
            $transaksi['bulan_jumlah_gol1'] = array("Gol-1");
            $transaksi['bulan_jumlah_gol2'] = array("Gol-2");
            $transaksi['bulan_jumlah_gol3'] = array("Gol-3");
            $transaksi['bulan_jumlah_gol4'] = array("Gol-4");
            $transaksi['bulan_jumlah_gol5'] = array("Gol-5");

            $transaksi['bulan_nilai_gol1'] = array("Gol-1");
            $transaksi['bulan_nilai_gol2'] = array("Gol-2");
            $transaksi['bulan_nilai_gol3'] = array("Gol-3");
            $transaksi['bulan_nilai_gol4'] = array("Gol-4");
            $transaksi['bulan_nilai_gol5'] = array("Gol-5");

            $transaksi['total_jumlah'] = array();
            $transaksi['total_nilai'] = array();


            for ($goli = 1; $goli <= 5; $goli++) {
                for ($x = 1; $x <= 12; $x++) {
                    array_push($transaksi['bulan_jumlah_gol'.$goli], 0);
                    array_push($transaksi['bulan_nilai_gol'.$goli], 0);
                }

            }

            $sql = 'select bulan, golongan as gol, sum(nilai) as nilai, sum(jumlah) as jumlah
                    from rekap_transaksi 
                    where tahun= '.$year.'
                    group by bulan,golongan order by bulan,gol';
            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $transaksi['bulan_nilai_gol'.$row->gol][$row->bulan] =  (int)$row->nilai;
                $transaksi['bulan_jumlah_gol'.$row->gol][$row->bulan] =  (int)$row->jumlah;
                $transaksi['total_jumlah'][$row->gol-1] =  (int)$transaksi['total_jumlah'] + (int)$row->jumlah;
                $transaksi['total_nilai'][$row->gol-1] =  (int)$transaksi['total_nilai'] + (int)$row->nilai;
            }

            $sql = 'select target_1, target_2, target_3, target_4, target_5, target_6, target_7, target_8, target_9, target_10, target_11, target_12 from kpi_transaksi where tahun ='.$year;
            $list = $this->db->query($sql);

            $transaksi['target_transaksi'] = array("Target Transaksi");
            $transaksi['target_transaksi_kumulatif'] = array("Target Transaksi Kumulatif");
            $transaksi['delta_transaksi'] = array("Realisasi-Target");


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

            $sql = 'select max(time) as last from pull_log where tipe = 2'; //FORMAT 2017-09-28
            $list = $this->db->query($sql);
            foreach ($list->result() as $row) {
                $transaksi['last_date_trx'] = $row->last;
            }

            return $transaksi;
        }

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