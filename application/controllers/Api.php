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

    public function pulls()
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
            $datatables['table'] = 'pulls';
            $datatables['id-table'] = 'id_pulls';
            /**
             * Kolom yang ditampilkan
             */
            $datatables['col-display'] = array(
                'tanggal',
                'shift'
            );
            /**
             * menggunakan table join
             */
            //            $datatables['join']    = 'INNER JOIN position ON position = id_position';

            $this->Datatables_model->Datatables($datatables);
        }
        return;
    }
}