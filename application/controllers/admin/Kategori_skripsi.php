<?php
class Kategori_skripsi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login();
        akses_editor();
        $this->load->model('M_Kategori_Skripsi');
        $this->load->model('M_User');
        header('Cache-Control: no-cache,must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0,false');
        header('Pragma: no-cache');
    }

    public function index()
    {
        $data['title'] = "Kategori Skripsi";
        $data['akun'] = $this->M_User->login();
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index1();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/kategori_skripsi/index', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function hapus($id_kategori_skripsi)
    {
        $data = $this->M_Kategori_Skripsi->get1($id_kategori_skripsi);
        if ($data) {
            $this->M_Kategori_Skripsi->hapus($id_kategori_skripsi);
            echo "<script>alert('Berhasil Hapus Data')</script>";
            redirect('admin/kategori_skripsi/index', 'refresh');
        } else {
            echo "<script>alert('Gagal Hapus Data')</script>";
            redirect('admin/kategori_skripsi/index', 'refresh');
        }
    }

    public function edit($id_kategori_skripsi)
    {
        $data['title'] = "FORM EDIT kategori_skripsi";
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->get1($id_kategori_skripsi);
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
            $this->session->set_flashdata('flash', 'Ditambah');
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
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/kategori_skripsi/index', 'refresh');
        } else {
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/kategori_skripsi/index', 'refresh');
        };
    }
}
