<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Komentar extends CI_Model
{

    public function get_komentar($id_jurnal)
    {
        $query = $this->db->select('*,jurnal.id_jurnal,user.id_user,user.foto')
            ->from('komentar')
            ->join('jurnal', 'komentar.id_jurnal=jurnal.id_jurnal', 'left')
            ->join('user', 'komentar.id_user=user.id_user', 'left')
            ->where('komentar.id_jurnal', $id_jurnal)
            ->get();
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
}
