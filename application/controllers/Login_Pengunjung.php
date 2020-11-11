<?php
class Login_Pengunjung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    function index()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => ' Tidak Boleh Kosong!'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => ' Tidak Boleh Kosong!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login Page';
            $this->load->view('pengunjung/login/login1', $data);
        } else {
            $this->auth();
        }
    }

    function auth()
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $cek_dosen = $this->M_User->auth_pengunjung($nama);
        $cek = $cek_dosen->row_array();
        if ($cek_dosen->row_array()) {
            if (($cek['id_status'] == '1')) {
                if (password_verify($password, $cek['password'])) {
                    $all = [
                        'id_user' => $cek['id_user'],
                        'nip_nim' => $cek['nip_nim'],
                        'nama' => $cek['nama'],
                        'tempat_lahir' => $cek['tempat_lahir'],
                        'tgl_lahir' => $cek['tgl_lahir'],
                        'alamat' => $cek['alamat'],
                        'no_hp' => $cek['no_hp'],
                        'email' => $cek['email'],
                        'nama_jk' => $cek['nama_jk'],
                        'nama_agama' => $cek['nama_agama'],
                        'foto' => $cek['foto'],
                        'tanggal_logout' => $cek['tanggal_logout'],
                        'nama_status' => $cek['nama_status'],
                        'id_kategori' => $cek['id_kategori'],
                    ];
                    $this->session->set_userdata($all);
                    echo "<script>alert('Berhasil Login, Silahkan Download File')</script>";
                    redirect('beranda', 'refresh');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('login_pengunjung', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Aktif</div>');
                redirect('login_pengunjung', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Tidak Terdaftar</div>');
            redirect('login_pengunjung');
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
        redirect('beranda', 'refresh');
    }
}
