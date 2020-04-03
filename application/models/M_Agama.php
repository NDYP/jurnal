<?php class M_Agama extends CI_Model
{


    public function agama()
    {
        $query = $this->db->select('*')
            ->from('agama')
            ->order_by('id_agama', 'ASC')
            ->get()
            ->result_array();
        return $query;
    }
    public function hapus($id_user)
    {
        $this->db->where('id_agama', $id_user);
        $this->db->delete('agama');
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
