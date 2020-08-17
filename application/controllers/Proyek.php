<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Proyek extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $data = array(  'title'     => 'Tersedia',
                            'subtitle'  => 'Project',
                            'isi'       => 'proyek/list'
                        );
            $this->load->view('layout/wrapper', $data, FALSE);
        }
    }
