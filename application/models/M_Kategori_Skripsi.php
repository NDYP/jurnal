<?php class M_Kategori_Skripsi extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('nama_kategori,kategori_skripsi.id_kategori_skripsi,count(*) as total') //menampilkan kategori
            ->from('kategori_skripsi')
            ->join('jurnal', 'kategori_skripsi.id_kategori_skripsi=jurnal.id_kategori_skripsi', 'left')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->where('status_jurnal.id_status_jurnal=', 5)
            ->group_by('nama_kategori', 'asc')
            ->get()
            ->result_array();
        return $query;
    }
    public function index1()
    {
        $query = $this->db->select('nama_kategori,kategori_skripsi.id_kategori_skripsi,count(*) as total') //menampilkan kategori
            ->from('kategori_skripsi')
            ->join('jurnal', 'kategori_skripsi.id_kategori_skripsi=jurnal.id_kategori_skripsi', 'left')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')

            ->group_by('nama_kategori', 'asc')
            ->get()
            ->result_array();
        return $query;
    }
    public function get1($id_kategori_skripsi) //menampilkan sesuai ketagori yang dipilih
    {
        $query = $this->db->from('kategori_skripsi')
            ->where('kategori_skripsi.id_kategori_skripsi', $id_kategori_skripsi)
            ->get()
            ->row_array();
        return $query;
    }
    public function get($id_kategori_skripsi, $perpage, $offset) //menampilkan sesuai ketagori yang dipilih
    {
        $category_id = $this->db->get_where('kategori_skripsi', array('id_kategori_skripsi' => $id_kategori_skripsi))->row('id_kategori_skripsi');
        return $this->db->order_by('id_kategori_skripsi', 'desc')
            ->from('jurnal')
            ->join('user', 'jurnal.id_penulis=user.id_user', 'left')
            ->join('status_jurnal', 'jurnal.id_status_jurnal=status_jurnal.id_status_jurnal', 'left')
            ->where('status_jurnal.id_status_jurnal=', 5)
            ->where('id_kategori_skripsi', $category_id)
            ->limit($perpage, $offset)
            ->get()
            ->result_array();
    }
    public function tambah($tabel, $params)
    {
        return $this->db->insert($tabel, $params);
    }
    public function update($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
    public function hapus($id_kategori_skripsi)
    {
        $this->db->where('id_kategori_skripsi', $id_kategori_skripsi);
        $this->db->delete('kategori_skripsi');
    }
}
