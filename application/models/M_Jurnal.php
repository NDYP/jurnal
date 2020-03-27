<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jurnal extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')

            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->get()
            ->result_array();
        return $query;
    }
    public function bimbingan()
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')

            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->where('jurnal.id_pembimbing1=', $this->session->userdata('nama'))
            ->or_where('jurnal.id_pembimbing2=', $this->session->userdata('nama'))->get()->result_array();
        return $query;
    }
    public function get($id_jurnal)
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')

            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'right')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')

            ->where('jurnal.id_jurnal', $id_jurnal)
            ->get()
            ->row_array();
        return $query;
    }
    public function get_komentar($id_jurnal)
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user,user.foto')
            ->from('komentar')
            ->join('jurnal', 'komentar.id_jurnal=jurnal.id_jurnal', 'left')
            ->join('user', 'komentar.id_user=user.id_user', 'left')
            ->where('komentar.id_jurnal', $id_jurnal)
            ->get()
            ->result_array();
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
}