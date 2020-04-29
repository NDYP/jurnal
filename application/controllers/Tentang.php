<?php class Tentang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Tentang');
        $this->load->model('M_User');
        $this->load->model('M_Layanan');

        $this->load->model('M_Jurnal');
        $this->load->model('M_User');
        $this->load->model('M_Komentar');
        $this->load->model('M_Statistik');
        $this->load->model('M_Layanan');
        tidak();
    }
    public function index()
    {
        $data['title'] = "Tentang Jurnal";
        $data['layanan'] = $this->M_Layanan->index()->result_array();
        $data['tentang'] = $this->M_Tentang->index()->result_array();
        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();
        $data['editor_total'] = $this->M_User->getAlleditor()->num_rows();
        $data['reviewer_total'] = $this->M_User->getAllreviewer()->num_rows();
        $data['akun'] = $this->M_User->login();
        $this->load->view('pengunjung/template/header', $data);
        $this->load->view('pengunjung/template/sidebar', $data);
        $this->load->view('pengunjung/tentang/index', $data);
        $this->load->view('pengunjung/template/rightbar', $data);
        $this->load->view('pengunjung/template/footer', $data);
    }
}
