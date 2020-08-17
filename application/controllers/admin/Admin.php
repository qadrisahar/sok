<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller
    {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->l_login->cek_login();
    }

    //Data admin
    public function index()
    {
        $admin = $this->admin_model->listing();
        $data = array(  'title' => 'Data Pengguna',
                        'admin'  => $admin,
                        'isi'   => 'admin/admin/list');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function tambah()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama', 'Nama lengkap', 'required', array('required'    => '%s harus diisi'));
        $valid->set_rules('telepon', 'No. Telepon lengkap', 'required', array('required'    => '%s harus diisi'));
        $valid->set_rules('alamat', 'Alamat', 'required', array('required'    => '%s harus diisi'));

        $valid->set_rules('username', 'Username', 'required|min_length[6]|max_length[32]|is_unique[admin.username]',
                array(  'required'   => '%s harus diisi',
                        'min_length' => '%s minimal 6 karakter',
                        'max_length' => '%s maksimal 32 karakter',
                        'is_unique'  => '%s sudah ada, buat username baru'));

        $valid->set_rules('password', 'Password', 'required',
                array('required'   => '%s harus diisi'));

        if ($valid->run()===FALSE) {

        $data = array(  'title' => 'Tambah Pengguna',
                        'isi'   => 'admin/admin/tambah');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(  'nama'         => $i->post('nama'),
                            'username'     => $i->post('username'),
                            'alamat'       => $i->post('alamat'),
                            'telepon'      => $i->post('telepon'),
                            'password'     => SHA1($i->post('password')),
                            'level'        => 'admin'
                        );
            $this->admin_model->tambah($data);
            $this->session->set_flashdata('sukses', 'Tambah Data Admin Berhasil');
            redirect(base_url('admin/admin'), 'refresh');
        }
    }

    public function edit($admin_id)
    {
        $admin = $this->admin_model->detail($admin_id);

        $valid = $this->form_validation;
        $valid->set_rules('nama', 'Nama lengkap', 'required', array('required'    => '%s harus diisi'));
        $valid->set_rules('telepon', 'No. Telepon lengkap', 'required', array('required'    => '%s harus diisi'));
        $valid->set_rules('alamat', 'Alamat', 'required', array('required'    => '%s harus diisi'));

        $valid->set_rules('username', 'Username', 'required|min_length[5]|max_length[32]',
                array(  'required'   => '%s harus diisi',
                        'min_length' => '%s minimal 5 karakter',
                        'max_length' => '%s maksimal 32 karakter'));

        if ($valid->run()===FALSE) {

        $data = array(  'title' => 'Edit Pengguna',
                        'admin'  => $admin,
                        'isi'   => 'admin/admin/edit');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(  'admin_id'     => $admin_id,
                            'nama'         => $i->post('nama'),
                            'username'     => $i->post('username'),
                            'telepon'      => $i->post('telepon'),
                            'alamat'       => $i->post('alamat'),
                            'level'        => 'admin'
                        );
            $this->admin_model->edit($data);
            $this->session->set_flashdata('sukses', 'Update data admin berhasil');
            redirect(base_url('admin/admin'), 'refresh');
        }
    }

    public function delete($admin_id)
    {
        $data = array('admin_id' => $admin_id);
        $this->admin_model->delete($data);
        $this->session->set_flashdata('sukses', 'Hapus data admin berhasil');
        redirect(base_url('admin/admin'), 'refresh');
    }

    public function ganti_pass($admin_id)
    {
        $admin = $this->admin_model->detail($admin_id);

        $valid = $this->form_validation;
        $valid->set_rules('password', 'Password', 'required', array('required' => '%s harus diisi'));
    
        if($valid->run() === FALSE){
    
        $data       = array('title'  => 'Ubah Password',
                            'admin'  => $admin,
                            'isi'    => 'admin/admin/ganti_pass');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            if(strlen($i->post('password')) >= 6 ) {
            $data = array(  'admin_id'       => $admin_id,
                            'password'       => SHA1($i->post('password')));
        } else {
            $data = array(  'admin_id'     => $admin_id);
        }
        $this->admin_model->edit($data);
        $this->session->set_flashdata('sukses', 'Ubash password berhasil');
        redirect(base_url('admin/admin'), 'refresh');
        }
    }
}
