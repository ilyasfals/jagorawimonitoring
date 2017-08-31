<?php
/**
 * Created by PhpStorm.
 * User: ILYAS
 * Date: 8/3/17
 * Time: 11:14 AM
 */

class Api extends CI_Controller
{

    public function employees()
    {
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {

            $this->load->model('Datatables_model');

            /**
             * Mengambil Parameter dan Perubahan nilai dari setiap
             * aktifitas pada table
             */
            $datatables = $_POST;
            $datatables['table'] = 'employees';
            $datatables['id-table'] = 'id_employees';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'npp',
                'nama'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function departement()
    {
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {

            $this->load->model('Datatables_model');

            /**
             * Mengambil Parameter dan Perubahan nilai dari setiap
             * aktifitas pada table
             */
            $datatables = $_POST;
            $datatables['table'] = 'departement';
            $datatables['id-table'] = 'id';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'kode',
                'nama',
                'deskripsi',
                'id'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function seksi()
    {
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {

            $this->load->model('Datatables_model');

            /**
             * Mengambil Parameter dan Perubahan nilai dari setiap
             * aktifitas pada table
             */
            $datatables = $_POST;
            $datatables['table'] = 'seksi';
            $datatables['id-table'] = 'id';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'kode',
                'nama',
                'deskripsi',
                'id'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function jabatan()
    {
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {

            $this->load->model('Datatables_model');

            /**
             * Mengambil Parameter dan Perubahan nilai dari setiap
             * aktifitas pada table
             */
            $datatables = $_POST;
            $datatables['table'] = 'jabatan';
            $datatables['id-table'] = 'id';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'kode',
                'nama',
                'deskripsi',
                'id'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function posisi()
    {
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {

            $this->load->model('Datatables_model');

            /**
             * Mengambil Parameter dan Perubahan nilai dari setiap
             * aktifitas pada table
             */
            $datatables = $_POST;
            $datatables['table'] = 'posisi';
            $datatables['id-table'] = 'id';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'kode',
                'nama',
                'deskripsi',
                'id'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function role()
    {
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {

            $this->load->model('Datatables_model');

            /**
             * Mengambil Parameter dan Perubahan nilai dari setiap
             * aktifitas pada table
             */
            $datatables = $_POST;
            $datatables['table'] = 'role';
            $datatables['id-table'] = 'id';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'kode',
                'nama'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function pulls($id_pulls=NULL)
    {
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {
            if($id_pulls==NULL) {

                $this->load->model('Datatables_model');

                /**
                 * Mengambil Parameter dan Perubahan nilai dari setiap
                 * aktifitas pada table
                 */
                $datatables = $_POST;
                $datatables['table'] = 'pulls';
                $datatables['id-table'] = 'id_pulls';
                /**
                 * Kolom yang ditampilkan
                 */
                $datatables['col-display'] = array(
                    'id_pulls',
                    'tanggal',
                    'id_gerbang',
                    'pengawas1',
                    'shift'
                );
                /**
                 * menggunakan table join
                 */
                //            $datatables['join']    = 'INNER JOIN position ON position = id_position';

                $this->Datatables_model->Datatables($datatables);
            }
            else{
                $this->load->model('Datatables_model');

                /**
                 * Mengambil Parameter dan Perubahan nilai dari setiap
                 * aktifitas pada table
                 */
                $datatables = $_POST;
                $datatables['table'] = 'pulls_gardu';
                $datatables['id-table'] = 'id_pulls_gardu';
                $datatables['init-where'] = 'id_pulls = '.$id_pulls;
                /**
                 * Kolom yang ditampilkan
                 */
                $datatables['col-display'] = array(
                    'id_pulls_gardu',
                    'id_gardus',
                    'real_petugas',
                    'pemasukan',

                );
                /**
                 * menggunakan table join
                 */
                //            $datatables['join']    = 'INNER JOIN position ON position = id_position';

                $this->Datatables_model->Datatables($datatables);
            }

        }
        return;
    }


    function fetch_departement(){
        $this->load->model("Cruddept_model");
        $fetch_data = $this->Cruddept_model->make_datatables();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->kode;;
            $sub_array[] = $row->nama;
            $sub_array[] = $row->deskripsi;
//            $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update">Update</button>';
            $sub_array[] = '<a href="updatedepartement/'.$row->id.'"  class="btn btn-warning btn-xs update">Update</a>';
            $sub_array[] = '<a href="deletedepartement/'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</a>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->Cruddept_model->get_all_data(),
            "recordsFiltered"     =>     $this->Cruddept_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }

    function fetch_seksi(){
        $this->load->model("Crudseksi_model");
        $fetch_data = $this->Crudseksi_model->make_datatables();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->kode;;
            $sub_array[] = $row->nama;
            $sub_array[] = $row->deskripsi;
//            $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update">Update</button>';
            $sub_array[] = '<a href="updateseksi/'.$row->id.'"  class="btn btn-warning btn-xs update">Update</a>';
            $sub_array[] = '<a href="deleteseksi/'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</a>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->Crudseksi_model->get_all_data(),
            "recordsFiltered"     =>     $this->Crudseksi_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }

    function fetch_jabatan(){
        $this->load->model("Crudjabatan_model");
        $fetch_data = $this->Crudjabatan_model->make_datatables();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->kode;;
            $sub_array[] = $row->nama;
            $sub_array[] = $row->deskripsi;
//            $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update">Update</button>';
            $sub_array[] = '<a href="updatejabatan/'.$row->id.'"  class="btn btn-warning btn-xs update">Update</a>';
            $sub_array[] = '<a href="deletejabatan/'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</a>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->Crudjabatan_model->get_all_data(),
            "recordsFiltered"     =>     $this->Crudjabatan_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }

    function fetch_posisi(){
        $this->load->model("Crudposisi_model");
        $fetch_data = $this->Crudposisi_model->make_datatables();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->kode;;
            $sub_array[] = $row->nama;
            $sub_array[] = $row->deskripsi;
//            $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update">Update</button>';
            $sub_array[] = '<a href="updateposisi/'.$row->id.'"  class="btn btn-warning btn-xs update">Update</a>';
            $sub_array[] = '<a href="deleteposisi/'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</a>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->Crudposisi_model->get_all_data(),
            "recordsFiltered"     =>     $this->Crudposisi_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }
}