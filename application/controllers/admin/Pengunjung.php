<?php class Pengunjung extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Agama');
        $this->load->model('M_Jenis_Kelamin');
        $this->load->model('M_User');
        login();
        header('Cache-Control: no-cache,must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0,false');
        header('Pragma: no-cache');
    }

    public function index()
    {
        $data['title'] = "PENGUNJUNG WEB";
        $data['pengunjung'] = $this->M_User->index_pengunjung();
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/pengunjung/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function simpan()
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]', [
            'required' => 'Email Tidak Boleh Kosong!',
            'is_unique' => 'Email Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Nama Lengkap Beserta Title Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nip_nim', 'nip_nim', 'required|trim|is_unique[user.nip_nim]', [
            'required' => 'NIP Tidak Boleh Kosong!',
            'is_unique' => 'NIM Telah Terdaftar'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FORM TAMBAH PENGUNJUNG WEB";
            $data['jk'] = $this->M_Jenis_Kelamin->jk();
            $data['agama'] = $this->M_Agama->agama();
            $data['akun'] = $this->M_User->login();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/pengunjung/tambah', $data);
            $this->load->view('admin/template/footer', $data);
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
                    $tempat_lahir = $this->input->post('tempat_lahir');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    $email = $this->input->post('email');
                    $id_jk = $this->input->post('id_jk');
                    $id_agama = $this->input->post('id_agama');
                    $alamat = $this->input->post('alamat');
                    $no_hp = $this->input->post('no_hp');

                    $password =
                        password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                    $data = array(
                        'password' => $password,
                        'nip_nim' => $nip_nim,
                        'nama' => $nama,
                        'id_kategori' => '5',
                        'id_status' => '2',
                    );
                    $this->M_User->tambah('user', $data);
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/pengunjung', 'refresh');
                } else {
                    $this->session->set_flashdata('flash', 'Ditambah');
                    redirect('admin/pengunjung', 'refresh');
                }
            } else {

                $nip_nim = $this->input->post('nip_nim');
                $nama = $this->input->post('nama');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tgl_lahir = $this->input->post('tgl_lahir');
                $email = $this->input->post('email');
                $id_jk = $this->input->post('id_jk');
                $id_agama = $this->input->post('id_agama');
                $alamat = $this->input->post('alamat');
                $no_hp = $this->input->post('no_hp');
                $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $data = array(
                    'password' => $password,
                    'nip_nim' => $nip_nim,
                    'nama' => $nama,
                    'id_jk' => $id_jk,
                    'tempat_lahir' => $tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'alamat' => $alamat,
                    'no_hp' => $no_hp,
                    'email' => $email,
                    'id_agama' => $id_agama,
                    'id_kategori' => '5',
                    'id_status' => '2',
                );
                $this->M_User->tambah('user', $data);
                $this->session->set_flashdata('flash', 'Ditambah');
                redirect('admin/pengunjung', 'refresh');
            }
        }
    }
    public function hapus($id_user)
    {
        $data = $this->M_User->get_pengunjung($id_user);
        if ($data) {
            $this->M_User->hapus($id_user);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('admin/pengunjung', 'refresh');
        } else {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('admin/pengunjung', 'refresh');
        }
    }
    public function detail($id_user)
    {
        $data['title'] = "DETAIL PENGUNJUNG WEB";
        $data['pengunjung'] = $this->M_User->get_pengunjung($id_user);
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/pengunjung/detail', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function edit($id_user)
    {
        $data['jk'] = $this->M_Jenis_Kelamin->jk();
        $data['agama'] = $this->M_Agama->agama();
        $data['title'] = "FORM EDIT BIODATA";
        $data['pengunjung'] = $this->M_User->get_pengunjung($id_user);
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/pengunjung/edit', $data);
        $this->load->view('admin/template/footer', $data);
    }
    public function ubah()
    {

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
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tgl_lahir = $this->input->post('tgl_lahir');
                $email = $this->input->post('email');
                $id_jk = $this->input->post('id_jk');
                $id_agama = $this->input->post('id_agama');
                $alamat = $this->input->post('alamat');
                $no_hp = $this->input->post('no_hp');
                $id_user = $this->input->post('id_user');


                $data = array(
                    'foto' => $file,
                    'nip_nim' => $nip_nim,
                    'nama' => $nama,
                    'id_jk' => $id_jk,
                    'tempat_lahir' => $tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'alamat' => $alamat,
                    'no_hp' => $no_hp,
                    'email' => $email,
                    'id_agama' => $id_agama,
                );
                $this->M_User->edit('user', $data, array('id_user' => $id_user));
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/pengunjung', 'refresh');
            } else {
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/pengunjung', 'refresh');
            }
        } else {
            $nip_nim = $this->input->post('nip_nim');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $email = $this->input->post('email');
            $id_jk = $this->input->post('id_jk');
            $id_agama = $this->input->post('id_agama');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $id_user = $this->input->post('id_user');

            $data = array(
                'nip_nim' => $nip_nim,
                'nama' => $nama,
                'id_jk' => $id_jk,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'email' => $email,
                'id_agama' => $id_agama,
            );
            $this->M_User->edit('user', $data, array('id_user' => $id_user));
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/pengunjung', 'refresh');
        }
    }
    public function aktif($id)
    {
        $id_user = $this->uri->segment(4);
        $data = array(
            'id_status' => 1,
        );
        $this->M_User->edit('user', $data, array('id_user' => $id_user));

        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/pengunjung");    # code...
        } else {
            redirect("admin/pengunjung");
        }
    }
    public function nonaktif($id)
    {
        $id_user = $this->uri->segment(4);
        $data = array(
            'id_status' => 2,
        );
        $this->M_User->edit('user', $data, array('id_user' => $id_user));

        if ($this->session->userdata('id_kategori') == 3) {
            redirect("admin/pengunjung");
        } else {
            redirect("admin/pengunjung");
        }
    }
}
