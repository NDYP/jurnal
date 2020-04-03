<?php class M_Status extends CI_Model
{
    public function index()
    {
        $query = $this->db->select('*')
            ->from('status')
            ->order_by('id_status', 'ASC')
            ->get()
            ->result_array();
        return $query;
    }
    public function hapus($id_user)
    {
        $this->db->where('id_status', $id_user);
        $this->db->delete('status');
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
