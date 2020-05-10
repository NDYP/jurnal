<?php
class Kategori_skripsi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kategori_Skripsi');
        $this->load->model('M_User');
    }

    public function index()
    {
        $data['title'] = "Kategori Skripsi";
        $data['akun'] = $this->M_User->login();
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index()->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/kategori_skripsi/index', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function hapus($id_kategori_skripsi)
    {
        $data = $this->M_Kategori_Skripsi->get($id_kategori_skripsi);
        if ($data) {

            $this->M_Kategori_Skripsi->hapus($id_kategori_skripsi);
            echo "<script>alert('Berhasil Hapus Data')</script>";
            redirect('admin/kategori_skripsi/index', 'refresh');
        } else {
            echo "<script>alert('Berhasil Ubah Data')</script>";
            redirect('admin/kategori_skripsi/index', 'refresh');
        }
    }

    public function edit($id_kategori_skripsi)
    {
        $data['title'] = "FORM EDIT kategori_skripsi";
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->get($id_kategori_skripsi);
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/kategori_skripsi/edit', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function simpan()
    {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required|trim', [
            'required' => 'Nama Kategori Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FORM TAMBAH DATA EDITOR";
            $data['akun'] = $this->M_User->login();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/kategori_skripsi/tambah', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $nama_kategori = $this->input->post('nama_kategori');
            $data = array(
                'nama_kategori' => $nama_kategori,
            );
            $this->M_Kategori_Skripsi->tambah('kategori_skripsi', $data);
            echo "<script>alert('Berhasil Tambah Data')</script>";
            redirect('admin/kategori_skripsi/index', 'refresh');
        }
    }

    public function ubah()
    {
        $id_kategori_skripsi = $this->input->post('id_kategori_skripsi');
        $nama_kategori = $this->input->post('nama_kategori');
        $data = array(
            'nama_kategori' => $nama_kategori,
        );
        $x = $this->M_Kategori_Skripsi->update('kategori_skripsi', $data, array('id_kategori_skripsi' => $id_kategori_skripsi));
        if ($x) {
            echo "<script>alert('Berhasil Ubah Data')</script>";
            redirect('admin/kategori_skripsi/index', 'refresh');
        } else {
            echo "<script>alert('Gagal Ubah Data')</script>";
            redirect('admin/kategori_skripsi/index', 'refresh');
        };
    }
}
