<?php
class Layanan extends CI_Controller
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
        $this->load->model('M_Layanan');
        $this->load->model('M_Template_Jurnal');
        $this->load->model('M_Kategori_Skripsi');
    }

    public function index()
    {
        $data['template'] = $this->M_Template_Jurnal->index()->result_array();
        $data['akun'] = $this->M_User->login();
        $data['layanan'] = $this->M_Layanan->index()->result_array();
        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();
        $data['reviewer_total'] = $this->M_User->getAllreviewer()->result_array();
        $data['akun'] = $this->M_User->login();

        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index();
        $this->load->view('pengunjung/template/header1', $data);
        $this->load->view('pengunjung/layanan/index1', $data);
        $this->load->view('pengunjung/template/sidebar1', $data);
        $this->load->view('pengunjung/template/footer1', $data);
    }
    public function index2()
    {
        $data['title'] = "INFORMASI LAYANAN HALAMAN PENGUNJUNG";
        $data['akun'] = $this->M_User->login();
        $data['layanan'] = $this->M_Layanan->index()->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/layanan/index', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function hapus($id_layanan)
    {
        $data = $this->M_Layanan->get_reviewer($id_layanan);
        if ($data) {

            $this->M_Layanan->hapus($id_layanan);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('layanan/index2');
        } else {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('layanan/index2');
        }
    }

    public function edit($id_layanan)
    {
        $data['title'] = "FORM EDIT LAYANAN";
        $data['layanan'] = $this->M_Layanan->get($id_layanan);
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/layanan/edit', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function ubah()
    {
        $id_layanan = $this->input->post('id_layanan');
        $email = $this->input->post('email');
        $no_telepon = $this->input->post('no_telepon');
        $link_instagram = $this->input->post('link_instagram');
        $link_facebook = $this->input->post('link_facebook');
        $website = $this->input->post('website');
        $alamat = $this->input->post('alamat');

        $data = array(
            'email' => $email,
            'website' => $website,
            'no_telepon' => $no_telepon,
            'link_instagram' => $link_instagram,
            'link_facebook' => $link_facebook,
            'alamat' => $alamat,
        );
        $x = $this->M_Layanan->update('layanan', $data, array('id_layanan' => $id_layanan));
        if ($x) {
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('layanan/index2', 'refresh');
        } else {
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('layanan/index2', 'refresh');
        };
    }
}
