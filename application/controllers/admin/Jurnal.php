<?php
class Jurnal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Komentar');
        $this->load->model('M_Kategori_Skripsi');
    }
    function index()
    {

        $data['title'] = 'JURNAL MAHASISWA SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->index();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function review()
    {

        $data['title'] = 'JURNAL MAHASISWA BIMBINGAN SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->bimbingan();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function detail($id_jurnal)
    {
        $data['title'] = 'JURNAL MAHASISWA BIMBINGAN SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['komentar'] = $this->M_Komentar->get_komentar($id_jurnal)->result_array();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/detail', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function jurnalakun()
    {
        akses_penulis();
        $data['title'] = 'UPLOAD JURNAL SKRIPSI';

        $data['akun'] = $this->M_User->login();
        $data['berkas'] = $this->M_User->berkas();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/upload', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function tambah()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim', [
            'required' => 'Judul Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('abstrak', 'nip_nim', 'required|trim', [
            'required' => 'Abstrak Tidak Boleh Kosong!',

        ]);

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'UPLOAD JURNAL';
            $data['jurnal'] = $this->M_Jurnal->index();
            $data['reviewer'] = $this->M_User->index_reviewer();
            $data['akun'] = $this->M_User->login();
            $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/jurnal/tambah', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $config['upload_path'] = './assets/jurnal/'; //path folder
            $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('nip_nim'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload('file')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/jurnal/' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/jurnal/' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $file = $gbr['file_name'];
                    $id_penulis = $this->input->post('id_penulis');
                    $id_pembimbing1 = $this->input->post('id_pembimbing1');
                    $id_pembimbing2 = $this->input->post('id_pembimbing2');
                    $id_kategori_skripsi = $this->input->post('id_kategori_skripsi');
                    $judul = $this->input->post('judul');

                    $abstrak = $this->input->post('abstrak');
                    date_default_timezone_set("ASIA/JAKARTA");
                    $date = date('Y-m-d H:i:s');
                    $data = array(
                        'file' => $file,
                        'judul' => $judul,
                        'abstrak' => $abstrak,
                        'id_pembimbing1' => $id_pembimbing1,
                        'id_pembimbing2' => $id_pembimbing2,
                        'id_penulis' => $id_penulis,
                        'id_status_jurnal' => 1,
                        'id_kategori_skripsi' => $id_kategori_skripsi,
                        'tgl_upload' => $date,
                    );
                    $this->M_Jurnal->tambah('jurnal', $data);
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                } else {
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                }
            } else {

                $this->session->set_flashdata('flash', 'Ditambah');
                redirect('admin/jurnal/jurnalakun', 'refresh');
            }
        }
    }
    function edit($id_jurnal)
    {
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index()->result_array();
        $data['title'] = 'REVISI JURNAL SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['reviewer'] = $this->M_User->index_reviewer();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/edit', $data);
        $this->load->view('admin/template/footer', $data);
    }

    function revisi_penulis()
    {

        $config['upload_path'] = './assets/jurnal/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('nip_nim'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload('file')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/jurnal/' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/jurnal/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $id_jurnal = $this->input->post('id_jurnal');
                $id_penulis = $this->input->post('id_penulis');
                $id_pembimbing1 = $this->input->post('id_pembimbing1');
                $id_pembimbing2 = $this->input->post('id_pembimbing2');
                $judul = $this->input->post('judul');
                $id_kategori_skripsi = $this->input->post('id_kategori_skripsi');
                $abstrak = $this->input->post('abstrak');
                date_default_timezone_set("ASIA/JAKARTA");
                $date = date('Y-m-d H:i:s');
                $data = array(
                    'file' => $file,
                    'judul' => $judul,
                    'abstrak' => $abstrak,
                    'id_pembimbing1' => $id_pembimbing1,
                    'id_pembimbing2' => $id_pembimbing2,
                    'id_penulis' => $id_penulis,
                    'id_status_jurnal' => 6,
                    'tgl_edit' => $date,
                    'id_kategori_skripsi' => $id_kategori_skripsi,
                );
                $this->M_Jurnal->update('jurnal', $data, array('id_jurnal' => $id_jurnal));
                $this->session->set_flashdata('flash', 'Diubah');
                if ($this->session->userdata('id_kategori') == 2) {
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                } else {
                    redirect('admin/jurnal/', 'refresh');
                }
            } else {
                $this->session->set_flashdata('flash', 'Diubah');
                if ($this->session->userdata('id_kategori') == 2) {
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                } else {
                    redirect('admin/jurnal/', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('error', 'Diubah');
            if ($this->session->userdata('id_kategori') == 2) {
                redirect('admin/jurnal/jurnalakun', 'refresh');
            } else {
                redirect('admin/jurnal/', 'refresh');
            }
        }
    }
    function komentar()
    {
        $this->form_validation->set_rules('komentar', 'judul', 'required|trim', [
            'required' => 'Komentar Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->review();
        } else {
            $id_jurnal = $this->input->post('id_jurnal');
            $id_user = $this->input->post('id_user');
            $komentar = $this->input->post('komentar');

            date_default_timezone_set("ASIA/JAKARTA");
            $date = date('Y-m-d H:i:s');
            $data = array(

                'id_jurnal' => $id_jurnal,

                'id_user' => $id_user,
                'komentar' => $komentar,
                'tanggal' => $date,
            );
            $this->M_Jurnal->tambah('komentar', $data);
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('admin/jurnal/review');
        }
    }
    public function cetak()
    {
        $data['akun'] = $this->M_User->login();
        $data['berkas'] = $this->M_User->berkas();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('admin/jurnal/cetak', $data);
    }
}
