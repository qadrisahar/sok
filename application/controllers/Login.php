<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller
    {
        public function index()
        {
            $this->l_login->cek_sudah_login();
            $this->form_validation->set_rules('username', 'Username', 'required',array('required' => '%s harus diisi!'));
            $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s harus diisi!'));

            if ($this->form_validation->run()) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $this->l_login->login($username,$password);
            }
            $data = array('title' => 'Login Admin');
            $this->load->view('admin/login/list', $data, FALSE);
        }

        public function logout()
        {
            $this->l_login->logout();
        }
    }