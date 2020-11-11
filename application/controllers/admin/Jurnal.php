<?php
class Jurnal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login();
        $this->load->model('M_User');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Komentar');
        $this->load->model('M_Kategori_Skripsi');
        $this->load->library('Pdf');
        header('Cache-Control: no-cache,must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0,false');
        header('Pragma: no-cache');
    }
    function index()
    {
        akses_editor();
        $data['title'] = 'ARTIKEL MAHASISWA SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->index();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function review()
    {
        akses_reviewer();
        $data['title'] = 'ARTIKEL MAHASISWA BIMBINGAN SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->bimbingan();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function detail($id_jurnal)
    {
        $data['title'] = 'ARTIKEL MAHASISWA BIMBINGAN SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['komentar'] = $this->M_Komentar->get_komentar($id_jurnal)->result_array();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/detail', $data);
        $this->load->view('admin/template/footer', $data);
    }
    //menampilkan jurnal akun
    function jurnalakun()
    {
        akses_penulis();
        $data['title'] = 'UPLOAD ARTIKEL SKRIPSI';
        $data['akun'] = $this->M_User->login();
        $data['berkas'] = $this->M_User->berkas();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/upload', $data);
        $this->load->view('admin/template/footer', $data);
    }
    //upload jurnal jika belum ada
    function tambah()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim', [
            'required' => 'Judul Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('abstrak', 'nip_nim', 'required|trim', [
            'required' => 'Abstrak Tidak Boleh Kosong!',
        ]);
        $this->form_validation->set_rules('kata_kunci', 'kata_kunci', 'required|trim', [
            'required' => 'Kata Kunci Tidak Boleh Kosong!',
        ]);
        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'UPLOAD ARTIKEL';
            $data['jurnal'] = $this->M_Jurnal->index();
            $data['reviewer'] = $this->M_User->index_reviewer();
            $data['akun'] = $this->M_User->login();
            $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index1();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/jurnal/tambah', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $config['upload_path'] = './assets/jurnal/'; //path folder
            $config['allowed_types'] = 'doc|docx'; //type yang dapat diakses bisa sesuaikan
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
                    $kata_kunci = $this->input->post('kata_kunci');

                    date_default_timezone_set("ASIA/JAKARTA");
                    $date = date('Y-m-d H:i:s');
                    $data = array(
                        'file' => $file,
                        'judul' => $judul,
                        'abstrak' => $abstrak,
                        'kata_kunci' => $kata_kunci,
                        'id_pembimbing1' => $id_pembimbing1,
                        'id_pembimbing2' => $id_pembimbing2,
                        'id_penulis' => $id_penulis,
                        'id_status_jurnal' => 1,
                        'id_status_jurnal1' => 1,
                        'id_kategori_skripsi' => $id_kategori_skripsi,
                        'tgl_upload' => $date,
                    );
                    $this->M_Jurnal->tambah('jurnal', $data);

                    $this->_sendDospem1();
                    $this->_sendDospem2();
                    //$this->_sendEditor();//
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">ARTIKEL GAGAL DIUPLOAD, FORMAT FILE HARUS DOC/DOCX</div>');
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">PILIH FILE UNTUK DIUPLOAD</div>');
                redirect('admin/jurnal/jurnalakun', 'refresh');
            }
        }
    }
    private function _sendDospem1()
    {
        $id_pembimbing1 = $this->input->post('id_pembimbing1');
        $id_pembimbing2 = $this->input->post('id_pembimbing2');
        $user = $this->db->get_where('user', ['nama' => $id_pembimbing1])->row_array();
        $user2 = $this->db->get_where('user', ['nama' => $id_pembimbing2])->row_array();

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'NDYP20062019@gmail.com',
            'smtp_pass' => 'yuliandi20062019',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->from('NDYP20062019@gmail.com');
        $this->email->to($user['email']);
        $this->email->subject('Artikel Jurnal Belum Review | E-journal TI UPR');
        $this->email->message('Klik Link Berikut : <a href="' . base_url() . 'admin/jurnal/review' . '">Review </a>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    private function _sendDospem2()
    {
        $id_pembimbing1 = $this->input->post('id_pembimbing1');
        $id_pembimbing2 = $this->input->post('id_pembimbing2');
        $user = $this->db->get_where('user', ['nama' => $id_pembimbing1])->row_array();
        $user2 = $this->db->get_where('user', ['nama' => $id_pembimbing2])->row_array();

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'NDYP20062019@gmail.com',
            'smtp_pass' => 'yuliandi20062019',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->from('NDYP20062019@gmail.com');
        $this->email->to($user2['email']);
        $this->email->subject('Artikel Jurnal Belum Review | E-journal TI UPR');
        $this->email->message('Klik Link Berikut : <a href="' . base_url() . 'admin/jurnal/review' . '">Review </a>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    private function _sendEditor()
    {
        $data = $this->M_User->index_editor();

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'NDYP20062019@gmail.com',
            'smtp_pass' => 'yuliandi20062019',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->from('NDYP20062019@gmail.com');
        $this->email->to($data['email']);
        $this->email->subject('Artikel Jurnal Baru | E-journal TI UPR');
        $this->email->message('Klik Link Berikut : <a href="' . base_url() . 'admin/jurnal' . '">Review </a>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    function edit($id_jurnal)
    {
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index1();
        $data['title'] = 'REVISI ARTIKEL SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['reviewer'] = $this->M_User->index_reviewer();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/edit', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function revisi()
    {

        $config['upload_path'] = './assets/jurnal/'; //path folder
        $config['allowed_types'] = 'doc|docx'; //type yang dapat diakses bisa sesuaikan
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

                $judul = $this->input->post('judul');
                $id_kategori_skripsi = $this->input->post('id_kategori_skripsi');
                $abstrak = $this->input->post('abstrak');
                $kata_kunci = $this->input->post('kata_kunci');
                date_default_timezone_set("ASIA/JAKARTA");
                $date = date('Y-m-d H:i:s');
                $data = array(
                    'file' => $file,
                    'judul' => $judul,
                    'abstrak' => $abstrak,
                    'kata_kunci' => $kata_kunci,

                    'id_penulis' => $id_penulis,
                    'id_status_jurnal' => 6,
                    'id_status_jurnal1' => 5,
                    'tgl_upload' => $date,
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
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Data</div>');
                if ($this->session->userdata('id_kategori') == 2) {
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                } else {
                    redirect('admin/jurnal/', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Boleh Kosong</div>');
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
    public function no_surat($id_jurnal)
    {
        $data['title'] = 'CETAK SURAT';
        $data['akun'] = $this->M_User->login();
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/jurnal/form_cetak', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function cetak()
    {
        $no_Seri = $this->input->post('no_seri');
        $id_jurnal = $this->input->post('id_jurnal');
        $data = array(
            'no_seri' => $no_Seri
        );
        $this->M_Jurnal->update('jurnal', $data, array('id_jurnal' => $id_jurnal));

        $data['berkas'] = $this->M_Jurnal->get($id_jurnal);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Surat Registrasi Jurnal.pdf";
        $this->pdf->load_view('admin/jurnal/cetak', $data);
    }
    public function report()
    {
        $data = array(
            'publish' => $this->M_Jurnal->jumlahpublish()->result(),
            'jumlahpublish' => $this->M_Jurnal->jumlahpublish()->num_rows(),
            //'jumlahpublishSI' => $this->M_Jurnal->jumlahpublishSI(),
            //'jumlahpublishSISDIG' => $this->M_Jurnal->jumlahpublishSISDIG(),
            //'jumlahpublishSENSOR' => $this->M_Jurnal->jumlahpublishSENSOR(),
            //'jumlahpublishIOT' => $this->M_Jurnal->jumlahpublishIOT(),
            // 'jumlahpublishMCN' => $this->M_Jurnal->jumlahpublishMCN(),
            //'jumlahpublishAI' => $this->M_Jurnal->jumlahpublishAI(),
            //'jumlahpublishDS' => $this->M_Jurnal->jumlahpublishDS(),
            // 'jumlahpublishMULTIMEDIA' => $this->M_Jurnal->jumlahpublishMULTIMEDIA(),
            // 'tidakpublish' => $this->M_Jurnal->tidakpublish(),
            // 'tidakpublishSI' => $this->M_Jurnal->tidakpublishSI(),
            // 'tidakpublishSISDIG' => $this->M_Jurnal->tidakpublishSISDIG(),
            // 'tidakpublishSENSOR' => $this->M_Jurnal->tidakpublishSENSOR(),
            // 'tidakpublishIOT' => $this->M_Jurnal->tidakpublishIOT(),
            // 'tidakpublishMCN' => $this->M_Jurnal->tidakpublishMCN(),
            // 'tidakpublishAI' => $this->M_Jurnal->tidakpublishAI(),
            // 'tidakpublishDS' => $this->M_Jurnal->tidakpublishDS(),
        );

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Laporan Artikel Publish Perbulan.pdf";
        $this->pdf->load_view('admin/jurnal/report', $data);
    }
    public function hapus($id_jurnal)
    {
        $data = $this->M_Jurnal->get($id_jurnal);
        if ($data) {
            $this->M_Jurnal->hapus($id_jurnal);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('admin/jurnal/jurnalakun', 'refresh');
        } else {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('admin/jurnal/jurnalakun', 'refresh');
        }
    }
}
