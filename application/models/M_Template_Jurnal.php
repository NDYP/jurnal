<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Template_Jurnal extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('template_jurnal')
            ->get();

        return $query;
    }
    public function get($id_template_jurnal)
    {
        $query = $this->db->select('*')
            ->from('template_jurnal')
            ->where('template_jurnal.id_template_jurnal', $id_template_jurnal)
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
    public function hapus($id_template_jurnal)
    {
        $this->db->where('id_template_jurnal', $id_template_jurnal);
        $this->db->delete('template_jurnal');
    }
}
