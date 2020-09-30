<?php
class Komentar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Komentar');
        $this->load->model('M_Status_Jurnal');
        login();
        header('Cache-Control: no-cache,must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0,false');
        header('Pragma: no-cache');
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
            $data['akun'] = $this->M_User->login();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/jurnal/tambah', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $id_penulis = $this->input->post('id_penulis');
            $id_pembimbing1 = $this->input->post('id_pembimbing1');
            $id_pembimbing2 = $this->input->post('id_pembimbing2');
            $judul = $this->input->post('judul');

            $abstrak = $this->input->post('abstrak');

            $data = array(

                'id_penulis' => $id_penulis,
                'id_status_jurnal' => 1,
                'tgl_upload' => time(),
            );
            $this->M_Komentar->tambah('komentar', $data);
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('admin/jurnal/jurnalakun');
        }
    }

    public function belum_review($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal' => 1,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));
        redirect("admin/jurnal/review");
    }

    public function revisi_editor()
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal' => 2,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));
        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/jurnal/");    # code...
        } else {
            redirect("admin/jurnal/review");    # code...
        }
    }
    public function revisi_penulis($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal' => 3,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));
        redirect("admin/jurnal/review");
    }
    public function tidak_publish($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal' => 4,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));

        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/jurnal/");    # code...
        } else {
            redirect("admin/jurnal/review");
        }
    }
    public function publish($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal' => 5,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));

        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/jurnal/");    # code...
        } else {
            redirect("admin/jurnal/review");
        }
    }
    public function sudah_revisi($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal' => 6,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));
        redirect("admin/jurnal/review");
    }

    public function belum_review1($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal1' => 1,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));
        redirect("admin/jurnal/review");
    }

    public function revisi_editor1()
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal1' => 2,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));

        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/jurnal/");    # code...
        } else {
            redirect("admin/jurnal/review");    # code...
        }
    }
    public function revisi_penulis1($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal1' => 3,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));
        redirect("admin/jurnal/review");
    }
    public function tidak_publish1($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal1' => 4,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));

        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/jurnal/");    # code...
        } else {
            redirect("admin/jurnal/review");
        }
    }
    public function publish1($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal1' => 6,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));

        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/jurnal/");    # code...
        } else {
            redirect("admin/jurnal/review");
        }
    }
    public function sudah_revisi1($id)
    {
        $id_jurnal = $this->uri->segment(4);
        $data = array(
            'id_status_jurnal1' => 5,
        );
        $this->M_Status_Jurnal->edit('jurnal', $data, array('id_jurnal' => $id_jurnal));
        redirect("admin/jurnal/review");
    }
}
