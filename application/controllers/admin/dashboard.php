<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_User');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Statistik');
        login();
        akses_dashboard();
    }
    function index()
    {

        //menampilkan jumlah jurnal perbulan tanpa lewat model
        $query =  $this->db->query("SELECT COUNT(id_jurnal) as count,MONTHNAME(tgl_upload) 
        as month_name FROM jurnal WHERE YEAR(tgl_upload) = '" . date('Y') . "'
    GROUP BY YEAR(tgl_upload),MONTH(tgl_upload)");
        $record = $query->result();
        $data = [];

        //memanggil data jumlah jurnal
        foreach ($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
        }
        //jumlah jurnal dimasukkan ke dalam variabel data dengan nama chart data
        $data['chart_data'] = json_encode($data);

        $data['akun'] = $this->M_User->login();
        $data['user'] = $this->M_User->index();
        $data['jurnal'] = $this->M_Jurnal->index();

        //jumlah seluruh jurnal
        $data['jumlahjurnal'] = $this->M_Jurnal->jumlahjurnal()->num_rows();

        //jumlah jurnal publish
        $data['jurnal2'] = $this->M_Jurnal->index2();

        //jumlah pengunjung setiap IP address
        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();

        //user yang sedang online, editor, reviewer dan penulis 
        $data['user_online'] = $this->M_Statistik->user_online()->num_rows();

        //jumlah pengunjung hari sekarang
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
}
