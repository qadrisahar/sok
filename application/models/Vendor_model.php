<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class Vendor_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('vendor');
        $this->db->order_by('id_vendor', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('vendor');
        $this->db->order_by('id_vendor', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('vendor', $data);
    }

    public function delete($data)
    {
      $this->db->where('id_vendor', $data['id_vendor']);
      $this->db->delete('vendor', $data);
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('vendor');
        $this->db->where(array( 'username' => $username,
                                'password' => SHA1($password)
        ));
        $this->db->order_by('id_vendor', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    public function edit($data)
    {
      $this->db->where('id_vendor', $data['id_vendor']);
      $this->db->update('vendor', $data);
    }

    public function detail($id_vendor)
    {
      $this->db->select('*');
      $this->db->from('vendor');
      $this->db->where('id_vendor', $id_vendor);
      $this->db->order_by('id_vendor', 'asc');
      $query = $this->db->get();
      return $query->row();
    }
}