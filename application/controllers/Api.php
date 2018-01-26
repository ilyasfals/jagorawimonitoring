<?php
/**
 * Created by PhpStorm.
 * User: ILYAS
 * Date: 8/3/17
 * Time: 11:14 AM
 */

class Api extends CI_Controller
{

    public function news()
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
            $datatables['table'] = 'news';
            $datatables['id-table'] = 'id';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'id',
                'title',
                'subtitle',
                'is_active'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function users(){
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
            $datatables['table'] = 'users';
            $datatables['id-table'] = 'id_user';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'id_user',
                'username',
                'password',
                'role',
                'id_employees'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';
            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function employees(){
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

    public function departement(){
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

    public function seksi(){
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

    public function jabatan(){
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

    public function posisi(){
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

    public function role(){
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

    public function pulls($id_pulls=NULL){
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

    public function kpis($id_kpis=NULL){
        /** AJAX Handle */
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
        ) {
            if($id_kpis==NULL) {

                $this->load->model('Datatables_model');

                /**
                 * Mengambil Parameter dan Perubahan nilai dari setiap
                 * aktifitas pada table
                 */
                $datatables = $_POST;
                $datatables['table'] = 'kpis';
                $datatables['id-table'] = 'id_kpis';
                /**
                 * Kolom yang ditampilkan
                 */
                $datatables['col-display'] = array(
                    'id_kpis',
                    'tahun',
                    'id_master_kpis',
                    'target_1',
                    'realisasi_1'
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
                $datatables['init-where'] = 'id_pulls = '.$id_kpis;
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

    public function normalisasi(){
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
            //$datatables['join']    = 'INNER JOIN position ON position = id_position';

            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }

    public function kpi(){
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
            $datatables['table'] = 'kpis';
            $datatables['id-table'] = 'id_kpis';
            $year = $_SESSION['tahun'];
            $datatables['init-where'] = 'tahun = '.$year;

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
            //$datatables['join']    = 'INNER JOIN position ON position = id_position';

            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }
}