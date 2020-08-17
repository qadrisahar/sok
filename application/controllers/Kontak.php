<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Kontak extends CI_Controller
    {
        public function index()
        {
            $data = array('title' => 'Kontak');
            $this->load->view('kontak/list', $data, FALSE);
        }
    }