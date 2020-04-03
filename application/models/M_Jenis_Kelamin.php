<?php class M_Jenis_Kelamin extends CI_Model
{
    public function jk()
    {
        $query = $this->db->select('*')
            ->from('jenis_kelamin')
            ->order_by('id_jk', 'ASC')
            ->get()
            ->result_array();
        return $query;
    }
    public function hapus($id_user)
    {
        $this->db->where('id_jk', $id_user);
        $this->db->delete('jenis_kelamin');
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
