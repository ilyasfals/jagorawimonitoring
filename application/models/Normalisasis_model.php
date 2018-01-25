<?php
class Normalisasis_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    /*
     *
     */
    public function getDataByMonth($year, $month){
        $query = $this->db->get_where('normalisasis', array('tahun' => $year, 'bulan' => $month));
        return $query->row_array();
    }

    public function update_normalisasi(){
        $this->load->helper('url');
        $normalisasi = $this->getDataByMonth($this->input->post('tahun'), $this->input->post('bulan'));
        $data = array(
            'tahun' => $this->input->post('tahun'),
            'bulan' => $this->input->post('bulan'),
            'lalin_1' => $this->input->post('lalin_1'),
            'lalin_2' => $this->input->post('lalin_2'),
            'lalin_3' => $this->input->post('lalin_3'),
            'lalin_4' => $this->input->post('lalin_4'),
            'lalin_5' => $this->input->post('lalin_5'),

            'pendapatan_1' => $this->input->post('pendapatan_1'),
            'pendapatan_2' => $this->input->post('pendapatan_2'),
            'pendapatan_3' => $this->input->post('pendapatan_3'),
            'pendapatan_4' => $this->input->post('pendapatan_4'),
            'pendapatan_5' => $this->input->post('pendapatan_5'),
        );
        var_dump($normalisasi);
        if(is_null($normalisasi)){ //edit
            return $this->db->insert('normalisasis', $data);
        }else{ //create
            return $this->db->update('normalisasis', $data);
        }
    }

    public function create_normalisasis()
    {
        $this->load->helper('url');
        $data = array(
            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'content' => $this->input->post('content'),
            'is_active' => $this->input->post('is_active')
        );
        return $this->db->insert('normalisasis', $data);
    }

    public function update_normalisasis()
    {
        $this->load->helper('url');
        $file_data = $this->upload->data();
        $file_name =   $file_data['file_name'];
        $data = array(
            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'content' => $this->input->post('content'),
            'banner' => $file_name,
            'is_active' => $this->input->post('is_active')
        );
        $id= $this->input->post('id');
        return $this->db->where('id', $id)+$this->db->update('news',$data);
    }

    public function getNormalisasiByYear($year = 0){
        $sql = 'select bulan, (pendapatan_1+pendapatan_2+pendapatan_3+pendapatan_4+pendapatan_5) as pendapatan,
            (lalin_1+lalin_2+lalin_3+lalin_4+lalin_5) as lalin
            from normalisasis where tahun ='.$year;

        $normalisasi['row_normalisasis'] = array();

        $list = $this->db->query($sql);

        foreach ($list->result() as $row) {
            $normalisasi['data_normalisasis'] = array();
            array_push($normalisasi['data_normalisasis'], $row->bulan);
            array_push($normalisasi['data_normalisasis'], $row->pendapatan);
            array_push($normalisasi['data_normalisasis'], $row->lalin);
            array_push($normalisasi['row_normalisasis'], $normalisasi['data_normalisasis']);
        }
        return $normalisasi['row_normalisasis'];
    }
}