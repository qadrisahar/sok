<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Register extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('vendor_model');
        }

        public function index()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
            $this->form_validation->set_rules('nama_direktur', 'Nama Direktur', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat Perusahaan', 'required');
            $this->form_validation->set_rules('telepon', 'No. Telepon Perushaan', 'required');
            $this->form_validation->set_rules('email', 'Email Perushaan', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[vendor.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('ulangi_password', 'Konfirmasi password', 'required|matches[password]', array('matches' => '%s tidak sesuai'));

            $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
            $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
            $this->form_validation->set_message('is_unique', '%s sudah dipakai, silahkan ganti');

            if($this->form_validation->run()) {

                $config['upload_path']    = './assets/upload/register/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '0';
                $config['max_width']     = '1024000';
                $config['max_height']    = '1024000';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('gambar') || ! $this->upload->do_upload('berkas')){
                
                $data = array(  'title'     => 'Registrasi',
                                'subtitle'  => 'Halaman',
                                'error'     => $this->upload->display_errors(),
                                'isi'       => 'register/list'
                            );
                $this->load->view('layout/wrapper', $data, FALSE);
                } else {
                    $this->upload->do_upload('gambar');
                    $upload_gambar =  $this->upload->data();

                    $this->upload->do_upload('berkas');
                    $upload_berkas =  $this->upload->data();
                // $upload_gambar = array('upload_data' => $this->upload->data());
                // $upload_berkas = array('upload_berkas' => $this->upload->data());

                $config['image_library']  = 'gd2';
                $config['source_image']   = './assets/upload/register/'.$upload_berkas['file_name'];
                $config['source_image']   = './assets/upload/register/'.$upload_gambar['file_name'];
                $config['new_image']      = './assets/upload/register/thumbs/';
                $config['create_thumb']   = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width']          = 800;
                $config['height']         = 533;
                $config['thumb_marker']   = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                

                $i = $this->input;
                $data = array(  'nama_perusahaan'  => $i->post('nama_perusahaan'),
                                'nama_direktur'    => $i->post('nama_direktur'),
                                'email'            => $i->post('email'),
                                'website'          => $i->post('website'),
                                'username'         => $i->post('username'),
                                'password'         => SHA1($i->post('password')),
                                'alamat'           => $i->post('alamat'),
                                'telepon'          => $i->post('telepon'),
                                'gambar'           => $upload_gambar['file_name'],
                                'berkas'           => $upload_berkas    ['file_name'],
                                'tanggal_daftar'    => date('Y-m-d  H:i:s')
                            );
                    $this->vendor_model->tambah($data);
                    $this->session->set_flashdata('sukses', 'Registrasi berhasil');
                    redirect(base_url('login_user'), 'refresh');
                }
            }
            $data = array(  'title'     => 'Registrasi',
                            'subtitle'  => 'Halaman',
                            'isi'       => 'register/list'
                        );
            $this->load->view('layout/wrapper', $data, FALSE);
        }
    }
