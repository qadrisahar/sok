<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Dashboard extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('vendor_model');
        }

        public function index()
        {
            $vendor = $this->vendor_model->listing();
            $data = array(  'title'     => 'Barang dan Jasa',
                            'subtitle'  => 'Sistem Penyedia',
                            'vendor'    => $vendor,
                            'isi'       => 'dashboard/list'
                        );
            $this->load->view('layout/wrapper', $data, FALSE);
        }
    }
