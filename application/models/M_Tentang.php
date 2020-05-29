<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Tentang extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('tentang')
            ->get();
        return $query;
    }
    public function get($id_tentang)
    {
        $query = $this->db->select('*')
            ->from('tentang')
            ->where('tentang.id_tentang', $id_tentang)
            ->get()
            ->row_array();
        return $query;
    }
    public function tambah($tabel, $params)
    {
        return $this->db->insert($tabel, $params);
    }
    public function edit($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
    public function hapus($id_tentang)
    {
        $this->db->where('id_tentang', $id_tentang);
        $this->db->delete('tentang');
    }
}
