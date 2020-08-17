<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class L_login{
    
    protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('admin_model');
    }

    public function login($username,$password)
    {
        $check = $this->CI->admin_model->login($username,$password);
        if($check){
            $admin_id = $check->admin_id;
            $nama     = $check->nama;
            $level    = $check->level;

            $this->CI->session->set_userdata('admin_id', $admin_id);
            $this->CI->session->set_userdata('nama', $nama);
            $this->CI->session->set_userdata('username', $username);            
            $this->CI->session->set_userdata('level', $level);
            redirect(base_url('admin/dashboard'), 'refresh');
        } else {
            $this->CI->session->set_flashdata('warning', 'username atau password salah');
            redirect(base_url('login'), 'refresh');   
        }
    }

    public function cek_login()
    {
        if ($this->CI->session->userdata('username') == "") {
            $this->CI->session->set_flashdata('warning', 'Silahkan login terlebih dahulu');
            redirect(base_url('login'), 'refresh');
        }
    }

    public function cek_sudah_login()
    {
        if ($this->CI->session->userdata('username')) {
            redirect(base_url('admin/dashboard'), 'refresh');
        }
    }

    public function logout()
    {
        $this->CI->session->unset_userdata('admin_id');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');        
        $this->CI->session->unset_userdata('level');
        $this->CI->session->set_flashdata('sukses', 'Logout berhasil');
        redirect(base_url('login'), 'refresh');   
    }
    
}