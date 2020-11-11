<?php class Pengunjung extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Agama');
        $this->load->model('M_Jenis_Kelamin');
        $this->load->model('M_User');
        header('Cache-Control: no-cache,must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0,false');
        header('Pragma: no-cache');
    }

    public function index()
    {
        $data['title'] = "PENGUNJUNG WEB";
        $data['pengunjung'] = $this->M_User->index_pengunjung();
        $data['akun'] = $this->M_User->login();
        $this->load->view('pengunjung/login/daftar', $data);
    }
    public function simpan()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Nama Lengkap Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nip_nim', 'nip_nim', 'required|trim|is_unique[user.nip_nim]', [
            'required' => 'NIP Tidak Boleh Kosong!',
            'is_unique' => 'NIM Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required|trim', [
            'required' => 'Email Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FORM TAMBAH PENGUNJUNG WEB";
            $data['jk'] = $this->M_Jenis_Kelamin->jk();
            $data['agama'] = $this->M_Agama->agama();
            $data['akun'] = $this->M_User->login();
            $this->load->view('pengunjung/login/daftar', $data);
        } else {
            $config['upload_path'] = './assets/foto/mhs/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa sesuaikan
            $config['file_name'] = $this->input->post('nip_nim'); //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $gbr = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/foto/mhs/' . $gbr['file_name'];
                    $config['maintain_ratio'] = FALSE;
                    $config['overwrite'] = TRUE;
                    $config['max_size']  = 1024;
                    $config['new_image'] = './assets/foto/mhs/' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $gbr['file_name'];

                    $nip_nim = $this->input->post('nip_nim');
                    $nama = $this->input->post('nama');
                    $email = $this->input->post('email');
                    $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                    $data = array(
                        'password' => $password,
                        'nip_nim' => $nip_nim,
                        'nama' => $nama,
                        'email' => $email,
                        'id_kategori' => '5',
                        'id_status' => '2',
                    );
                    $this->M_User->tambah('user', $data);
                    $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">TUNGGU DIAKTIFKAN ADMIN</div>');
                    redirect('pengunjung', 'refresh');
                } else {
                    $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">TUNGGU DIAKTIFKAN ADMIN</div>');
                    redirect('pengunjung', 'refresh');
                }
            } else {

                $nip_nim = $this->input->post('nip_nim');
                $nama = $this->input->post('nama');
                $email = $this->input->post('email');
                $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $data = array(
                    'password' => $password,
                    'nip_nim' => $nip_nim,
                    'nama' => $nama,
                    'email' => $email,
                    'id_kategori' => '5',
                    'id_status' => '2',
                );
                $this->M_User->tambah('user', $data);
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">TUNGGU DIAKTIFKAN ADMIN</div>');
                redirect('pengunjung', 'refresh');
            }
        }
    }
}
