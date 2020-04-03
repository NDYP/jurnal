<?php class M_Kategori extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('kategori')
            ->order_by('id_kategori', 'ASC')
            ->get()
            ->result_array();
        return $query;
    }
    public function hapus($id_user)
    {
        $this->db->where('id_kategori', $id_user);
        $this->db->delete('kategori');
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
