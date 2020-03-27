<?php class M_Reviewer extends CI_Model
{
    public function index()
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
    public function get($id_user)
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
    public function hapus($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
    public function edit($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
}
