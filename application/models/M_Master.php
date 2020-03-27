<?php class M_Master extends CI_Model
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

    public function agama()
    {
        $query = $this->db->select('*')
            ->from('agama')
            ->order_by('id_agama', 'ASC')
            ->get()
            ->result_array();
        return $query;
    }
}
