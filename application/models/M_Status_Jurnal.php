<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Status_Jurnal extends CI_Model
{
    public function edit($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
}
