<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Statistik extends CI_Model
{
    function pengunjung()
    {
        return $this->db->query("SELECT * FROM statistik GROUP BY ip");
    }
    function pengunjung1()
    {
        $now = date('Y-m-d');
        $x = $this->db->select("*")
            ->from('statistik')
            ->where('tanggal=', $now)
            ->group_by('ip')
            ->get();
        return $x;
    }
    function user_online()
    {
        $now = date('Y-m-d');
        $x = $this->db->select("*")
            ->from('user')
            ->where('online=', 1)
            ->group_by('id_user')
            ->get();
        return $x;
    }
    function totalpengunjung()
    {
        return $this->db->query("SELECT COUNT(hits) as total FROM statistik");
    }
    function hits()
    {
        return $this->db->query("SELECT SUM(hits) as total FROM statistik WHERE tanggal='" . date("Y-m-d") . "' GROUP BY tanggal");
    }
    function totalhits()
    {
        return $this->db->query("SELECT SUM(hits) as total FROM statistik");
    }
    function pengunjungonline()
    {
        $bataswaktu       = time() - 300;
        return $this->db->query("SELECT * FROM statistik WHERE online > '$bataswaktu'");
    }
    function chat()
    {
        $query =  $this->db->query("SELECT COUNT(id_jurnal) as count,MONTHNAME(tgl_upload) as month_name FROM jurnal WHERE YEAR(tgl_upload) = '" . date('Y') . "'
      GROUP BY YEAR(tgl_upload),MONTH(tgl_upload)");
    }
}
