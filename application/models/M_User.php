<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*, count(user.id_user) as jumlahuser') //pilih semua
            ->from('user') //dari tbel user
            ->order_by('id_user', 'ASC') //urut berdasarkan id
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left') //gabung tabel kategori
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->get()
            ->result_array(); //ditampilkan dalam bentuk array
        return $query;
    }
    public function login()
    {
        //menampilkan data user sesuai dengan sesi login
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
        //menampilkan data jurnal sesuai dengan sesi login
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
    public function hapus($id_user)
    {
        //menghapus data user sesuai id yang dipilih
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
    public function edit($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
    public function update($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
    function auth_dosen($nip_nim)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('user.id_kategori !=', 2)
            ->where('user.nip_nim', $nip_nim)
            ->get();
        return $query;
    }

    //cek nim dan password mahasiswa
    function auth_mahasiswa($nip_nim)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('user.id_kategori=', 2)
            ->where('user.nip_nim', $nip_nim)
            ->get();
        return $query;
    }
    function auth($nip_nim)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('user.nip_nim', $nip_nim)
            ->get();
        return $query;
    }


    public function logout($date, $id_user)
    {
        $this->db->where('user.id_user', $id_user);
        $this->db->update('user', $date);
    }
    public function index_reviewer()
    {
        $query = $this->db->select('*')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'left')
            ->join('status', 'user.id_status=status.id_status', 'left')
            ->join('agama', 'user.id_agama=agama.id_agama', 'left')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'left')
            ->where('kategori.nama_kategori="Reviewer"')
            ->get()
            ->result_array();
        return $query;
    }
    public function tambah($tabel, $params)
    {
        return $this->db->insert($tabel, $params);
    }
    public function get_reviewer($id_user)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('id_user', $id_user)
            ->get()
            ->row_array();
        return $query;
    }
    public function index_penulis()
    {
        $query = $this->db->select('*')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('kategori.nama_kategori="Penulis"')
            ->get()
            ->result_array();
        return $query;
    }

    public function get_penulis($id_user)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('id_user', $id_user)
            ->get()
            ->row_array();
        return $query;
    }
    public function index_editor()
    {
        $query = $this->db->select('*') // pilih semua
            ->from('user') // dari tabel user
            ->order_by('id_user', 'ASC') // susun berdasarkan id
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('kategori.nama_kategori="Editor"')
            ->get()
            ->result_array();
        return $query;
    }
    public function get_editor($id_user)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->order_by('id_user', 'ASC')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('id_user', $id_user)
            ->get()
            ->row_array();
        return $query;
    }
    public function indexeditor($limit, $offset)
    {
        $query = $this->db->select('*') // pilih semua
            ->from('user') // dari tabel user
            ->order_by('id_user', 'ASC') // susun berdasarkan id
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('kategori.nama_kategori="Editor"')
            ->order_by('id_user', 'asc')
            ->limit($limit, $offset)
            ->get();
        return $query;
    }
    public function getAlleditor()
    {
        $query = $this->db->select('*') // pilih semua
            ->from('user') // dari tabel user
            ->order_by('id_user', 'ASC') // susun berdasarkan id
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('kategori.nama_kategori="Editor"')
            ->order_by('id_user', 'asc')
            ->get();
        return $query;
    }
    public function indexreviewer($limit, $offset)
    {
        $query = $this->db->select('*') // pilih semua
            ->from('user') // dari tabel user
            ->order_by('id_user', 'ASC') // susun berdasarkan id
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('kategori.nama_kategori="Reviewer"')
            ->order_by('id_user', 'asc')
            ->limit($limit, $offset)
            ->get();
        return $query;
    }
    public function getAllreviewer()
    {
        $query = $this->db->select('nama_kategori,kategori.id_kategori,count(*) as total') // pilih semua
            ->from('kategori') // dari tabel user
            ->join('user', 'kategori.id_kategori=user.id_kategori', 'left')
            ->order_by('id_user', 'asc')
            ->group_by('kategori.id_kategori', 'asc')
            ->get();
        return $query;
    }
    public function indexpenulis($limit, $offset)
    {
        $query = $this->db->select('*') // pilih semua
            ->from('user') // dari tabel user
            ->order_by('id_user', 'ASC') // susun berdasarkan id
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('kategori.nama_kategori="Penulis"')
            ->order_by('id_user', 'asc')
            ->limit($limit, $offset)
            ->get();
        return $query;
    }
    public function getAllpenulis()
    {
        $query = $this->db->select('*') // pilih semua
            ->from('user') // dari tabel user
            ->order_by('id_user', 'ASC') // susun berdasarkan id
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('kategori.nama_kategori="Penulis"')
            ->order_by('id_user', 'asc')
            ->get();
        return $query;
    }
}
