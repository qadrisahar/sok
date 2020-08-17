<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Vendor extends CI_Controller
    {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('vendor_model');
        $this->l_login->cek_login();
    }

    public function index()
    {
        $vendor = $this->vendor_model->listing();
        $data = array(  'title' => 'Data Vendor',
                        'vendor'  => $vendor,
                        'isi'   => 'admin/vendor/list');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function detail($id_vendor)
    {
        $vendor = $this->vendor_model->detail($id_vendor);

        $valid = $this->form_validation;
        if ($valid->run()===FALSE) {

        $data = array(  'title' => 'Detail Vendor',
                        'vendor'  => $vendor,
                        'isi'   => 'admin/vendor/detail');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(  'id_vendor'         => $id_vendor,
                            'nama_perusahaan'   => $i->post('nama_perusahaan'),
                        );
            $this->vendor_model->edit($data);
            $this->session->set_flashdata('sukses', 'Update data vendor berhasil');
            redirect(base_url('admin/vendor'), 'refresh');
        }
    }

    public function delete($id_vendor)
    {
        $data = array('id_vendor' => $id_vendor);
        $this->vendor_model->delete($data);
        $this->session->set_flashdata('sukses', 'Hapus data vendor berhasil');
        redirect(base_url('admin/vendor'), 'refresh');
    }
}
