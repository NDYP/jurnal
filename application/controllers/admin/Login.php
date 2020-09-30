<?php

class Login extends CI_Controller
{
    function __construct()
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

    function index()
    {
        $this->form_validation->set_rules('nip_nim', 'nip_nim', 'required|trim', [
            'required' => 'Username Tidak Boleh Kosong!'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login Page';
            $this->load->view('admin/login/login', $data);
        } else {
            $this->auth();
        }
    }
    function daftar()
    {
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
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim', [
            'required' => 'Tempat Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim', [
            'required' => 'Tanggal Lahir Tidak Boleh Kosong!'
        ]);

        $this->form_validation->set_rules('id_jk', 'id_jk', 'required|trim', [
            'required' => 'Jenis Kelamin Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FORM TAMBAH PENGUNJUNG WEB";
            $data['jk'] = $this->M_Jenis_Kelamin->jk();
            $data['agama'] = $this->M_Agama->agama();
            $data['akun'] = $this->M_User->login();
            $this->load->view('admin/login/daftar', $data);
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

            $password =
                password_hash($this->input->post('password'), PASSWORD_DEFAULT);
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
                'id_kategori' => '2',
                'id_status' => '2',
            );
            $this->M_User->tambah('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Segera Diaktifkan</div>');
            redirect('admin/login', 'refresh');
        }
    }

    function auth()
    {
        $nip_nim = $this->input->post('nip_nim');
        $password = $this->input->post('password');

        $cek_dosen = $this->M_User->auth($nip_nim);
        //cek apakah nim yang di input terdapat pada database
        if ($data = $cek_dosen->row_array()) {
            //cek status akun
            if (($data['id_status'] == '1')) {
                //cek password
                if (password_verify($password, $data['password'])) {
                    $all = [
                        'id_user' => $data['id_user'],
                        'nip_nim' => $data['nip_nim'],
                        'nama' => $data['nama'],
                        'tempat_lahir' => $data['tempat_lahir'],
                        'tgl_lahir' => $data['tgl_lahir'],
                        'alamat' => $data['alamat'],
                        'no_hp' => $data['no_hp'],
                        'email' => $data['email'],
                        'nama_jk' => $data['nama_jk'],
                        'nama_agama' => $data['nama_agama'],
                        'foto' => $data['foto'],
                        'tanggal_logout' => $data['tanggal_logout'],
                        'nama_status' => $data['nama_status'],
                        'id_kategori' => $data['id_kategori'],
                        'online' => $data['online'],
                    ];
                    $this->session->set_userdata($all);

                    //status otomatis online//
                    $date = array(
                        'online' => '1'
                    );
                    $id_user = $this->session->userdata('id_user');
                    $this->M_User->logout($date, $id_user);
                    //status otomatis online

                    //cek sesi kategori login
                    //
                    if ($this->session->userdata('id_kategori') == 3) {
                        redirect('admin/dashboard', 'refresh');
                    } else if ($this->session->userdata('id_kategori') == 1) {
                        redirect('admin/jurnal/review', 'refresh');
                    } else if ($this->session->userdata('id_kategori') == 2) {
                        redirect('admin/jurnal/jurnalakun', 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Aktif</div>');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Tidak Terdaftar</div>');
            redirect('admin/login');
        }
    }

    function logout()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $date = array(
            'tanggal_logout' => date('Y-m-d H:i:s'),
            'online' => '0'
        );
        $id_user = $this->session->userdata('id_user');
        $this->M_User->logout($date, $id_user);

        $this->session->sess_destroy();
        echo "<script>alert('Silahkan Login Kembali')</script>";
        redirect('admin/login', 'refresh');
    }
    function lupa_password()
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email', [
            'required' => 'Email Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Forgot Password';
            $this->load->view('admin/login/lupa', $data);
        } else {
            $email = $this->input->post('email');
            date_default_timezone_set("ASIA/JAKARTA");
            $date = date('Y-m-d H:i:s');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'tanggal_buat' => $date,
                ];
                $this->db->insert('token', $user_token);
                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Cek Email Untuk Reset Password</div>');
                redirect('admin/login', 'refresh');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Email Tidak Ditemukan</div>');
                redirect('admin/login/lupa_password', 'refresh');
            }
        }
    }
    private function _sendEmail($token, $type)
    {
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
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Reset Passwword | E-journal TI UPR');
            $this->email->message('Klik Link Berikut : <a href="' . base_url('admin/login/verify?email=') . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset </a>');
        } else if ($type == 'forgot') {

            $this->email->subject('Reset Passwword | E-journal TI UPR');
            $this->email->message('Klik Link Berikut : <a href="' . base_url() . 'admin/login/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset </a>');
        }
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        //cek apakah email terdaftar
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika terdaftar
        if ($user) {
            //cek jika token terdaftar
            $user_token = $this->db->get_where('token', ['token' => $token])->row_array();
            //jika ya           
            if ($user_token) {
                $this->session->set_userdata('reset_password', $email);
                $this->ubahpassword();
            }
            //jika tidak
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Reset Password Gagal!Token Salah</div>');
                redirect('admin/login/lupa_password', 'refresh');
            }
        }
        //jika tidak
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Reset Password Gagal!Email Salah</div>');

            redirect('admin/login/lupa_password', 'refresh');
        }
    }
    public function ubahpassword()
    {
        if (!$email = $this->session->userdata('reset_password')) {
            redirect('admin/login', 'refresh');
        }

        $this->form_validation->set_rules('password1', 'password', 'required|trim|matches[password2]', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Ubah Password';
            $this->load->view('admin/login/ubah', $data);
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_password');

            $x = $this->M_User->edit('user', ['password' =>  $password], array('email' => $email));
            if ($x) {
                $this->session->unset_userdata('reset_password');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Direset</div>');
                redirect('admin/login', 'refresh');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Gagal Direset</div>');
                redirect('admin/login', 'refresh');
            }
        }
    }
}
