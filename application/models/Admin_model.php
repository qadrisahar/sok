<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class Admin_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->order_by('admin_id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->order_by('admin_id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('admin', $data);
    }

    public function delete($data)
    {
      $this->db->where('admin_id', $data['admin_id']);
      $this->db->delete('admin', $data);
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array( 'username' => $username,
                                'password' => SHA1($password)
        ));
        $this->db->order_by('admin_id', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    public function edit($data)
    {
      $this->db->where('admin_id', $data['admin_id']);
      $this->db->update('admin', $data);
    }

    public function detail($admin_id)
    {
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where('admin_id', $admin_id);
      $this->db->order_by('admin_id', 'asc');
      $query = $this->db->get();
      return $query->row();
    }
}