<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Layanan extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('layanan')
            ->get();
        return $query;
    }
    public function get($id_layanan)
    {
        $query = $this->db->select('*')
            ->from('layanan')
            ->where('layanan.id_layanan', $id_layanan)
            ->get()
            ->row_array();
        return $query;
    }
    public function tambah($tabel, $params)
    {
        return $this->db->insert($tabel, $params);
    }
    public function update($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
    public function hapus($id_layanan)
    {
        $this->db->where('id_layanan', $id_layanan);
        $this->db->delete('layanan');
    }
}
