<?php
class Template_Jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Template_Jurnal');
        $this->load->model('M_User');
    }

    public function index()
    {
        $data['title'] = "TEMPLATE JURNAL HALAMAN PENGUNJUNG";
        $data['akun'] = $this->M_User->login();
        $data['jurnal'] = $this->M_Template_Jurnal->index()->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template_jurnal/index', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function simpan()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim', [
            'required' => 'Judul Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FORM TEMPLATE JURNAL HALAMAN PENGUNJUNG";

            $data['akun'] = $this->M_User->login();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template_jurnal/tambah', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $config['upload_path'] = './assets/jurnal/template/'; //path folder
            $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('judul'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload('file')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/jurnal/template/' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/jurnal/template/' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $gbr['file_name'];
                    $judul = $this->input->post('judul');
                    $data = array(
                        'judul' => $judul,
                        'file' => $file,
                    );
                    $this->M_Template_Jurnal->tambah('template_jurnal', $data);
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/template_jurnal/index', 'refresh');
                } else {
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/template_jurnal/index', 'refresh');
                }
            } else {
                $this->session->set_flashdata('flash', 'Ditambah');
                redirect('admin/template_jurnal/index', 'refresh');
            }
        }
    }
    public function hapus($id_template_jurnal)
    {
        $data = $this->M_Template_Jurnal->get($id_template_jurnal);
        if ($data) {

            $this->M_Template_Jurnal->hapus($id_template_jurnal);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/template_jurnal/index', 'refresh');
        } else {
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/template_jurnal/index', 'refresh');
        }
    }

    public function edit($id_template_jurnal)
    {
        $data['title'] = "FORM EDIT LAYANAN";
        $data['layanan'] = $this->M_Template_Jurnal->get($id_template_jurnal);
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template_jurnal/edit', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function ubah()
    {
        $config['upload_path'] = './assets/jurnal/template/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('judul'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload('file')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/jurnal/template/' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/jurnal/template/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $judul = $this->input->post('judul');
                $id_template_jurnal = $this->input->post('id_template_jurnal');
                $data = array(
                    'judul' => $judul,
                    'file' => $file,
                );
                $this->M_Template_Jurnal->update('template_jurnal', $data, array('id_template_jurnal' => $id_template_jurnal));
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/template_jurnal/index', 'refresh');
            } else {
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/template_jurnal/index', 'refresh');
            }
        } else {
            $judul = $this->input->post('judul');
            $id_template_jurnal = $this->input->post('id_template_jurnal');
            $data = array(
                'judul' => $judul,
            );
            $this->M_Template_Jurnal->update('template_jurnal', $data, array('id_template_jurnal' => $id_template_jurnal));
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/template_jurnal/index', 'refresh');
        }
    }
}
