<?php
class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Layanan');
        $this->load->model('M_User');
        $this->load->model('M_Template_Jurnal');
        $this->load->model('M_Jurnal');
        $this->load->model('M_User');
        $this->load->model('M_Komentar');
        $this->load->model('M_Statistik');
        $this->load->model('M_Tentang');
        $this->load->model('M_Template_Jurnal');
        $this->load->model('M_Kategori_Skripsi');
    }

    public function index()
    {
        $data['template'] = $this->M_Template_Jurnal->index()->result_array();
        $data['title'] = "Tentang Jurnal";
        $data['layanan'] = $this->M_Layanan->index()->result_array();
        $data['tentang'] = $this->M_Tentang->index()->result_array();
        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();
        $data['reviewer_total'] = $this->M_User->getAllreviewer()->result_array();
        $data['akun'] = $this->M_User->login();

        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index();
        $this->load->view('pengunjung/template/header1', $data);
        $this->load->view('pengunjung/tentang/index1', $data);
        $this->load->view('pengunjung/template/sidebar1', $data);
        $this->load->view('pengunjung/template/footer1', $data);
    }
}
