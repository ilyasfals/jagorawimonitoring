<?php
class Kpis_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_pull($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('pulls');
            return $query->result_array();
        }

        $query = $this->db->get_where('pulls', array('id_pulls' => $id));
        return $query->row_array();
    }
    
    public function set_kpi()
    {

        $this->load->helper('url');
        $data = array(
            'tahun' => $this->input->post('tahun'),
            'id_master_kpis' => $this->input->post('id_master_kpis'),
            'target_1' => $this->parseStringMoneyToDouble($this->input->post('target_1')),
            'target_2' => $this->parseStringMoneyToDouble($this->input->post('target_2')),
            'target_3' => $this->parseStringMoneyToDouble($this->input->post('target_3')),
            'target_4' => $this->parseStringMoneyToDouble($this->input->post('target_4')),
            'target_5' => $this->parseStringMoneyToDouble($this->input->post('target_5')),
            'target_6' => $this->parseStringMoneyToDouble($this->input->post('target_6')),
            'target_7' => $this->parseStringMoneyToDouble($this->input->post('target_7')),
            'target_8' => $this->parseStringMoneyToDouble($this->input->post('target_8')),
            'target_9' => $this->parseStringMoneyToDouble($this->input->post('target_9')),
            'target_10' => $this->parseStringMoneyToDouble($this->input->post('target_10')),
            'target_11' => $this->parseStringMoneyToDouble($this->input->post('target_11')),
            'target_12' => $this->parseStringMoneyToDouble($this->input->post('target_12')),
            'realisasi_1' => $this->parseStringMoneyToDouble($this->input->post('realisasi_1')),
            'realisasi_2' => $this->parseStringMoneyToDouble($this->input->post('realisasi_2')),
            'realisasi_3' => $this->parseStringMoneyToDouble($this->input->post('realisasi_3')),
            'realisasi_4' => $this->parseStringMoneyToDouble($this->input->post('realisasi_4')),
            'realisasi_5' => $this->parseStringMoneyToDouble($this->input->post('realisasi_5')),
            'realisasi_6' => $this->parseStringMoneyToDouble($this->input->post('realisasi_6')),
            'realisasi_7' => $this->parseStringMoneyToDouble($this->input->post('realisasi_7')),
            'realisasi_8' => $this->parseStringMoneyToDouble($this->input->post('realisasi_8')),
            'realisasi_9' => $this->parseStringMoneyToDouble($this->input->post('realisasi_9')),
            'realisasi_10' => $this->parseStringMoneyToDouble($this->input->post('realisasi_10')),
            'realisasi_11' => $this->parseStringMoneyToDouble($this->input->post('realisasi_11')),
            'realisasi_12' => $this->parseStringMoneyToDouble($this->input->post('realisasi_12')),
        );

        return $this->db->insert('kpis', $data);
    }

    public function update_kpi(){
        $this->load->helper('url');

        $data = array(
            'tahun' => $this->input->post('tahun'),
            'id_master_kpis' => $this->input->post('id_master_kpis'),
            'target_1' => $this->parseStringMoneyToDouble($this->input->post('target_1')),
            'target_2' => $this->parseStringMoneyToDouble($this->input->post('target_2')),
            'target_3' => $this->parseStringMoneyToDouble($this->input->post('target_3')),
            'target_4' => $this->parseStringMoneyToDouble($this->input->post('target_4')),
            'target_5' => $this->parseStringMoneyToDouble($this->input->post('target_5')),
            'target_6' => $this->parseStringMoneyToDouble($this->input->post('target_6')),
            'target_7' => $this->parseStringMoneyToDouble($this->input->post('target_7')),
            'target_8' => $this->parseStringMoneyToDouble($this->input->post('target_8')),
            'target_9' => $this->parseStringMoneyToDouble($this->input->post('target_9')),
            'target_10' => $this->parseStringMoneyToDouble($this->input->post('target_10')),
            'target_11' => $this->parseStringMoneyToDouble($this->input->post('target_11')),
            'target_12' => $this->parseStringMoneyToDouble($this->input->post('target_12')),
            'realisasi_1' => $this->parseStringMoneyToDouble($this->input->post('realisasi_1')),
            'realisasi_2' => $this->parseStringMoneyToDouble($this->input->post('realisasi_2')),
            'realisasi_3' => $this->parseStringMoneyToDouble($this->input->post('realisasi_3')),
            'realisasi_4' => $this->parseStringMoneyToDouble($this->input->post('realisasi_4')),
            'realisasi_5' => $this->parseStringMoneyToDouble($this->input->post('realisasi_5')),
            'realisasi_6' => $this->parseStringMoneyToDouble($this->input->post('realisasi_6')),
            'realisasi_7' => $this->parseStringMoneyToDouble($this->input->post('realisasi_7')),
            'realisasi_8' => $this->parseStringMoneyToDouble($this->input->post('realisasi_8')),
            'realisasi_9' => $this->parseStringMoneyToDouble($this->input->post('realisasi_9')),
            'realisasi_10' => $this->parseStringMoneyToDouble($this->input->post('realisasi_10')),
            'realisasi_11' => $this->parseStringMoneyToDouble($this->input->post('realisasi_11')),
            'realisasi_12' => $this->parseStringMoneyToDouble($this->input->post('realisasi_12')),
        );
        return $this->db->where('id_kpis', $this->input->post('id_kpis'))+$this->db->update('kpis',$data);
    }

    /**
     * @param int $year
     * @return mixed
     */
    public function get_last_month_rekap_year($year = 0){
        $sql = "";
        if($year == 0){
            //Rekap bulanan
            $sql = 'select m.id_master_kpis, m.process, m.perspektif, m.area, m.deskripsi_nick,
                    target_1,target_2,target_3,target_4,target_5,target_6,target_7,target_8,target_9,target_10,target_11,target_12,
                    realisasi_1,realisasi_2,realisasi_3,realisasi_4,realisasi_5,realisasi_6,realisasi_7,realisasi_8,realisasi_9,realisasi_10,realisasi_11,realisasi_12
                     from master_kpis m
                    left outer join kpis k on m.id_master_kpis=k.id_master_kpis AND k.tahun = 2017
                    order by m.id_master_kpis';
        }else{
            $sql = 'select m.id_master_kpis, m.process, m.perspektif, m.area, m.deskripsi_nick,
                    target_1,target_2,target_3,target_4,target_5,target_6,target_7,target_8,target_9,target_10,target_11,target_12,
                    realisasi_1,realisasi_2,realisasi_3,realisasi_4,realisasi_5,realisasi_6,realisasi_7,realisasi_8,realisasi_9,realisasi_10,realisasi_11,realisasi_12
                    from master_kpis m
                    left outer join kpis k on m.id_master_kpis=k.id_master_kpis AND k.tahun = '.$year.'
                    where tahun = '.$year.'
                    order by m.id_master_kpis';
        }
        $now = new \DateTime('now');
        $current_month = (int) $now->format('m');


        $kpi['row_kpis'] = array();


        $list = $this->db->query($sql);
        foreach ($list->result() as $row) {
            $kpi['data_kpis'] = array();
            array_push($kpi['data_kpis'], $row->id_master_kpis);
            array_push($kpi['data_kpis'], $row->process);
            array_push($kpi['data_kpis'], $row->perspektif);
            array_push($kpi['data_kpis'], $row->area);
            array_push($kpi['data_kpis'], $row->deskripsi_nick);

            array_push($kpi['data_kpis'], $row->target_1);
            array_push($kpi['data_kpis'], $row->target_2);
            array_push($kpi['data_kpis'], $row->target_3);
            array_push($kpi['data_kpis'], $row->target_4);
            array_push($kpi['data_kpis'], $row->target_5);
            array_push($kpi['data_kpis'], $row->target_6);
            array_push($kpi['data_kpis'], $row->target_7);
            array_push($kpi['data_kpis'], $row->target_8);
            array_push($kpi['data_kpis'], $row->target_9);
            array_push($kpi['data_kpis'], $row->target_10);
            array_push($kpi['data_kpis'], $row->target_11);
            array_push($kpi['data_kpis'], $row->target_12);


            array_push($kpi['data_kpis'], $row->realisasi_1);
            array_push($kpi['data_kpis'], $row->realisasi_2);
            array_push($kpi['data_kpis'], $row->realisasi_3);
            array_push($kpi['data_kpis'], $row->realisasi_4);
            array_push($kpi['data_kpis'], $row->realisasi_5);
            array_push($kpi['data_kpis'], $row->realisasi_6);
            array_push($kpi['data_kpis'], $row->realisasi_7);
            array_push($kpi['data_kpis'], $row->realisasi_8);
            array_push($kpi['data_kpis'], $row->realisasi_9);
            array_push($kpi['data_kpis'], $row->realisasi_10);
            array_push($kpi['data_kpis'], $row->realisasi_11);
            array_push($kpi['data_kpis'], $row->realisasi_12);

            array_push($kpi['row_kpis'], $kpi['data_kpis']);
        }

        $kpi['rekap_kpis'] = array("Realisasi-Target");
        $kpi['rekap_kpis_target'] = array("Rekap-Target");
        $kpi['rekap_kpis_realisasi'] = array("Rekap-Realisasi");
        $kpi['rekap_kpis_nilai'] = array("Rekap-Realisasi-Nilai");
        $kpi['jenis_kpis'] = array("");
//            var_dump($kpi['row_kpis']);die();

        for ($x = 0; $x < sizeof($kpi['row_kpis']); $x++) {
            $kumulatifDataTargetByMonth = 0;
            $kumulatifDataRealisasiByMonth = 0;
            for ($y = 1; $y <= $current_month; $y++) {
                $kumulatifDataTargetByMonth += $kpi['row_kpis'][$x][$y + 4];
                $kumulatifDataRealisasiByMonth += $kpi['row_kpis'][$x][$y + 4 + 12];
//                    var_dump($kumulatifDataTargetByMonth);
            }
//                die();
            if ($kumulatifDataTargetByMonth != 0) {
                $kpi['rekap_kpis'][$x + 1] = ($kumulatifDataRealisasiByMonth - $kumulatifDataTargetByMonth) * 100 / $kumulatifDataTargetByMonth;
                $kpi['rekap_kpis_nilai'][$x + 1] = $kumulatifDataRealisasiByMonth - $kumulatifDataTargetByMonth;
                $kpi['rekap_kpis_target'][$x + 1] = $kumulatifDataTargetByMonth;
                $kpi['rekap_kpis_realisasi'][$x + 1] = $kumulatifDataRealisasiByMonth;
            } else {
                $kpi['rekap_kpis'][$x + 1] = 0;
                $kpi['rekap_kpis_nilai'][$x + 1] = $kumulatifDataRealisasiByMonth - $kumulatifDataTargetByMonth;
                $kpi['rekap_kpis_target'][$x + 1] = $kumulatifDataTargetByMonth;
                $kpi['rekap_kpis_realisasi'][$x + 1] = $kumulatifDataRealisasiByMonth;
            }
            $kpi['jenis_kpis'][$x] =  $kpi['row_kpis'][$x][4];
        }
        return $kpi;

    }
    public function get_master_kpis(){
        $sql = 'select pic, perspektif, area, deskripsi, id_master_kpis from master_kpis';
        $kpi['row_master_kpis'] = array();
        $list = $this->db->query($sql);
        foreach ($list->result() as $row) {
            $kpi['data_master_kpis'] = array();
            array_push($kpi['data_master_kpis'], $row->pic);
            array_push($kpi['data_master_kpis'], $row->perspektif);
            array_push($kpi['data_master_kpis'], $row->area);
            array_push($kpi['data_master_kpis'], $row->deskripsi);
            array_push($kpi['data_master_kpis'], $row->id_master_kpis);

            array_push($kpi['row_master_kpis'], $kpi['data_master_kpis']);
        }
        return $kpi['row_master_kpis'];

    }

    public function get_kpi_by_tahun_and_master($tahun, $id_master_kpis){

        $query = $this->db->get_where('kpis', array('tahun' => $tahun, 'id_master_kpis' => $id_master_kpis));
        return $query->row_array();


       // return null;
    }
    public function parseStringMoneyToDouble($stringMoney){
        return str_replace(",",".", str_replace(".","", $stringMoney));
    }
}