<?php
class Jurnal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->model('M_Akun');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Reviewer');
    }
    function index()
    {
        $data['title'] = 'JURNAL MAHASISWA SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->index();
        $data['akun'] = $this->M_Akun->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function review()
    {
        $data['title'] = 'JURNAL MAHASISWA BIMBINGAN SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->bimbingan();
        $data['akun'] = $this->M_Akun->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function detail($id_jurnal)
    {
        $data['title'] = 'JURNAL MAHASISWA BIMBINGAN SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['komentar'] = $this->M_Jurnal->get_komentar($id_jurnal);
        $data['akun'] = $this->M_Akun->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/detail', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function jurnalakun()
    {
        $data['title'] = 'UPLOAD JURNAL SKRIPSI';

        $data['akun'] = $this->M_Akun->login();
        $data['berkas'] = $this->M_Akun->berkas();
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
            $data['reviewer'] = $this->M_Reviewer->index();
            $data['akun'] = $this->M_Akun->login();
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
                    $judul = $this->input->post('judul');

                    $abstrak = $this->input->post('abstrak');

                    $data = array(
                        'file' => $file,
                        'judul' => $judul,
                        'abstrak' => $abstrak,
                        'id_pembimbing1' => $id_pembimbing1,
                        'id_pembimbing2' => $id_pembimbing2,
                        'id_penulis' => $id_penulis,
                        'id_status_jurnal' => 1,
                        'tgl_upload' => time(),
                    );
                    $this->M_Jurnal->tambah('jurnal', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">Berhasil Menambahkan Data</div>');
                    redirect('admin/jurnal/jurnalakun');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning col-md-3" role="alert">Gagal Menambahkan Data</div>');
                    redirect('admin/jurnal/jurnalakun');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
          File Tidak Boleh Kosong</div>');
                redirect('admin/jurnal/jurnalakun');
            }
        }
    }
    function edit($id_jurnal)
    {
        $data['title'] = 'REVISI JURNAL SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['reviewer'] = $this->M_Reviewer->index();
        $data['akun'] = $this->M_Akun->login();
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

                $abstrak = $this->input->post('abstrak');

                $data = array(
                    'file' => $file,
                    'judul' => $judul,
                    'abstrak' => $abstrak,
                    'id_pembimbing1' => $id_pembimbing1,
                    'id_pembimbing2' => $id_pembimbing2,
                    'id_penulis' => $id_penulis,
                    'id_status_jurnal' => 6,
                    'tgl_edit' => time(),
                );
                $this->M_Jurnal->update('jurnal', $data, array('id_jurnal' => $id_jurnal));
                $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">Berhasil Menambahkan Data</div>');
                if ($akun['id_kategori'] == 2) {
                    redirect('admin/jurnal/jurnalakun');
                } else {
                    redirect('admin/jurnal/');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning col-md-3" role="alert">Gagal Menambahkan Data</div>');
                if ($akun['id_kategori'] == 2) {
                    redirect('admin/jurnal/jurnalakun');
                } else {
                    redirect('admin/jurnal/');
                }
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-3" role="alert">
          File Tidak Boleh Kosong</div>');
            if ($akun['id_kategori'] == 2) {
                redirect('admin/jurnal/jurnalakun');
            } else {
                redirect('admin/jurnal/');
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
            $data = array(

                'id_jurnal' => $id_jurnal,
                'id_user' => $id_user,
                'komentar' => $komentar,
                'tanggal' => time(),
            );
            $this->M_Jurnal->tambah('komentar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">Berhasil Menambahkan Data</div>');
            redirect('admin/jurnal/review');
        }
    }
}
