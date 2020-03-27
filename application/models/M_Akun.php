<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Akun extends CI_Model
{
    public function login()
    {
        $query = $this->db->select('*,user.id_user')
            ->from('user')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->join('jurnal', 'user.id_user=jurnal.id_penulis', 'left')
            ->where('user.id_user=', $this->session->userdata('id_user'))->get()->row_array();

        return $query;
    }

    public function berkas()
    {

        $query = $this->db->select('*,jurnal.id_jurnal')
            ->from('user')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->join('jurnal', 'user.id_user=jurnal.id_penulis', 'right')
            ->join('komentar', 'jurnal.id_jurnal=komentar.id_jurnal', 'left')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->where('user.id_user=', $this->session->userdata('id_user'))->get()->row_array();
        return $query;
    }

    public function ambil_akun($id_user)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('pegawai', 'user.id_pegawai=pegawai.id_pegawai', 'left');
        $this->db->join('role', 'user.id_role=role.id_role', 'left');
        $this->db->join('status', 'user.id_status=status.id_status', 'left');
        $this->db->where('user.id_user', $id_user);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateusername($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
}
