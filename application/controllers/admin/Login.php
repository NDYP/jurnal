<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
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

    function auth()
    {
        $nip_nim = $this->input->post('nip_nim');
        $password = $this->input->post('password');

        $cek_dosen = $this->M_User->auth_dosen($nip_nim);
        $cek = $cek_dosen->row_array();
        if ($cek_dosen->num_rows() > 0) { //jika login sebagai dosen

            if ($cek['id_kategori'] == 3) { //Akses admin
                if ($data = $cek_dosen->row_array()) {
                    if (($cek['id_status'] == '1')) {
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
                                'tanggal_regis' => $data['tanggal_regis'],
                                'tanggal_logout' => $data['tanggal_logout'],
                                'nama_status' => $data['nama_status'],
                                'id_kategori' => $data['id_kategori'],
                            ];
                            $this->session->set_userdata($all);
                            redirect('admin/dashboard');
                        } else {
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                            redirect('admin/login');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Aktif</div>');
                        redirect('admin/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun TIdak Terdaftar</div>');
                    redirect('admin/login');
                }
            } else { //akses dosen
                if ($data = $cek_dosen->row_array()) {
                    if (($data['id_status'] == '1')) {
                        if (password_verify($password, $data['password'])) {
                            $all = [
                                'masuk' => TRUE,
                                'akses' => '2',
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
                                'tanggal_regis' => $data['tanggal_regis'],
                                'tanggal_logout' => $data['tanggal_logout'],
                                'nama_status' => $data['nama_status'],
                                'id_kategori' => $data['id_kategori'],
                            ];
                            $this->session->set_userdata($all);
                            redirect('admin/jurnal/review');
                        } else {
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                            redirect('admin/login');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Tidak Aktif</div>');
                        redirect('admin/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun TIdak Terdaftar</div>');
                    redirect('admin/login');
                }
            }
        } else { //jika login sebagai mahasiswa

            $cek_mahasiswa = $this->M_User->auth_mahasiswa($nip_nim)->row_array();
            if ($data = $cek_mahasiswa) {
                if (($data['id_status'] == '1')) {
                    if (password_verify($password, $data['password'])) {

                        $all = [
                            'masuk' => TRUE,
                            'akses' => '3',
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
                            'tanggal_regis' => $data['tanggal_regis'],
                            'tanggal_logout' => $data['tanggal_logout'],
                            'nama_status' => $data['nama_status'],
                            'id_kategori' => $data['id_kategori'],
                        ];
                        $this->session->set_userdata($all);
                        redirect('admin/jurnal/jurnalakun');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                        redirect('admin/login');
                    }
                } else {  // jika nip_nim dan password tidak ditemukan atau salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Tidak Aktif</div>');
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>');
                redirect('admin/login');
            }
        }
    }

    function logout()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $date = array('tanggal_logout' => date('Y-m-d H:i:s'));
        $id_user = $this->session->userdata('id_user');
        $this->M_User->logout($date, $id_user);
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
