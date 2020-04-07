<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Statistik extends CI_Model
{
    function pengunjung()
    {
        return $this->db->query("SELECT * FROM statistik WHERE tanggal='" . date("Y-m-d") . "' GROUP BY ip");
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
