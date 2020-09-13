<?php class Tentang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Tentang');
        $this->load->model('M_User');
        login();
        akses_editor();
        header('Cache-Control: no-cache,must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0,false');
        header('Pragma: no-cache');
    }
    public function index()
    {
        $data['title'] = "Tentang Jurnal";
        $data['tentang'] = $this->M_Tentang->index()->result_array();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/tentang/index', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function edit($id_tentang)
    {
        $data['title'] = "Edit Tentang Jurnal";
        $data['tentang'] = $this->M_Tentang->get($id_tentang);
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/tentang/edit', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function ubah()
    {
        $config['upload_path'] = './assets/foto/tentang/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('nip_nim'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/tentang/' . $gbr['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['max_size']  = 1024;
                $config['new_image'] = './assets/foto/tentang/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file = $gbr['file_name'];

                $isi = $this->input->post('isi');
                $id_tentang = $this->input->post('id_tentang');
                $data = array(
                    'foto' => $file,
                    'isi' => $isi,
                );
                $this->M_Tentang->edit('tentang', $data, array('id_tentang' => $id_tentang));
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/tentang/index', 'refresh');
            } else {
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/tentang/index', 'refresh');
            }
        } else {
            $isi = $this->input->post('isi');
            $id_tentang = $this->input->post('id_tentang');
            $data = array(
                'isi' => $isi,
            );
            $this->M_Tentang->edit('tentang', $data, array('id_tentang' => $id_tentang));
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/tentang/index', 'refresh');
        }
    }
    public function simpan()
    {
        $this->form_validation->set_rules('isi', 'isi', 'required|trim', [
            'required' => 'Tentang Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FORM TAMBAH DATA EDITOR";

            $data['akun'] = $this->M_User->login();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/tentang/tambah', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $config['upload_path'] = './assets/foto/tentang/';  //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('id_tentang'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/foto/tentang/' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/foto/tentang/' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $gbr['file_name'];

                    $isi = $this->input->post('isi');
                    $data = array(
                        'isi' => $isi,
                        'foto' => $file,
                    );
                    $this->M_User->tambah('tentang', $data);
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/tentang/index', 'refresh');
                } else {
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/tentang/index', 'refresh');
                }
            } else {
                $isi = $this->input->post('isi');
                $data = array(
                    'isi' => $isi,
                );
                $this->M_User->tambah('tentang', $data);
                $this->session->set_flashdata('flash', 'Ditambah');
                redirect('admin/tentang/index', 'refresh');
            }
        }
    }
}
