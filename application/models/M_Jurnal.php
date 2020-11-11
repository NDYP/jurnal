<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jurnal extends CI_Model
{
    //pengunjung
    public function cari($cari, $limit, $offset)
    {

        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('status_jurnal1', 'jurnal.id_status_jurnal1=status_jurnal1.id_status_jurnal1', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->like('user.nama', $cari)
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->or_like('jurnal.id_penulis', $cari)
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->or_like('jurnal.no_seri', $cari)
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->or_like('jurnal.kata_kunci', $cari)
            ->order_by('id_jurnal', 'desc')
            ->limit($limit, $offset)
            ->get()
            ->result_array();
        return $query;
    }
    public function index()
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('status_jurnal1', 'jurnal.id_status_jurnal1=status_jurnal1.id_status_jurnal1', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->order_by('id_jurnal', 'desc')
            ->get()
            ->result_array();
        return $query;
    }
    public function jumlahjurnal()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->get();
        return $query;
    }
    public function index2()
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user,count(jurnal.id_jurnal) as jumlahjurnal')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->get()
            ->result_array();
        return $query;
    }
    public function indexpengunjung($limit, $offset)
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->order_by('id_jurnal', 'desc')
            ->limit($limit, $offset)
            ->get();
        return $query;
    }
    public function getAll()
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->order_by('id_jurnal', 'desc')
            ->get();
        return $query;
    }
    public function bimbingan()
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('status_jurnal1', 'jurnal.id_status_jurnal1=status_jurnal1.id_status_jurnal1', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->where('jurnal.id_pembimbing1=', $this->session->userdata('nama'))
            ->order_by('id_jurnal', 'desc')
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
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_jurnal', $id_jurnal)
            ->get()
            ->row_array();
        return $query;
    }
    public function get_komentar($id_jurnal)
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user,user.foto,count(komentar.id_jurnal) as cx')
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
    public function notif1($id_pembimbing1)
    {
        $query = $this->db->select('email')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('id_user', $id_pembimbing1)
            ->get()
            ->row_array();
        return $query;
    }
    public function notif2($id_pembimbing2)
    {
        $query = $this->db->select('email')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('id_user', $id_pembimbing2)
            ->get()
            ->row_array();
        return $query;
    }
    public function jumlahpublish()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->join('status_jurnal1', 'jurnal.id_status_jurnal1=status_jurnal1.id_status_jurnal1', 'left')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->where('MONTH(tgl_upload)=', date('m'))
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->get();
        return $query;
    }
    public function jumlahpublishSI()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 8)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function jumlahpublishSISDIG()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 9)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function jumlahpublishSENSOR()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 11)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function jumlahpublishIOT()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 12)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function jumlahpublishMCN()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 13)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function jumlahpublishAI()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 14)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function jumlahpublishDS()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 15)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function jumlahpublishMULTIMEDIA()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 5)
            ->where('jurnal.id_status_jurnal1=', 6)
            ->where('kategori_skripsi.id_kategori_skripsi=', 16)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }

    public function tidakpublish()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishSI()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 8)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishSISDIG()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 9)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishSENSOR()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 11)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishIOT()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 12)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishMCN()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 13)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishAI()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 14)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishDS()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 15)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function tidakpublishMULTIMEDIA()
    {
        $query = $this->db->select('*')
            ->from('jurnal')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->join('kategori_skripsi', 'jurnal.id_kategori_skripsi=kategori_skripsi.id_kategori_skripsi', 'left')
            ->where('jurnal.id_status_jurnal=', 4)
            ->where('jurnal.id_status_jurnal1=', 4)
            ->where('kategori_skripsi.id_kategori_skripsi=', 16)
            ->where('YEAR(tgl_upload)=', date('Y'))
            ->group_by('YEAR(tgl_upload)')
            ->group_by('month(tgl_upload)')
            ->get()
            ->num_rows();
        return $query;
    }
    public function hapus($id_jurnal)
    {
        //menghapus data user sesuai id yang dipilih
        $this->db->where('id_jurnal', $id_jurnal);
        $this->db->delete('jurnal');
    }
}
