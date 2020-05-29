<?php
class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Agama');
        $this->load->model('M_Jenis_Kelamin');
    }
    function index()
    {
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/akun/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function edit_foto()
    {
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/akun/edit_foto', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function edit_profil()
    {
        $data['akun'] = $this->M_User->login();
        $data['jk'] = $this->M_Jenis_Kelamin->jk();
        $data['agama'] = $this->M_Agama->agama();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/akun/edit_profil', $data);
        $this->load->view('admin/template/footer', $data);
    }
    function edit_password()
    {
        $data['akun'] = $this->M_User->login();
        $data['jk'] = $this->M_Jenis_Kelamin->jk();
        $data['agama'] = $this->M_Agama->agama();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/akun/edit_password', $data);
        $this->load->view('admin/template/footer', $data);
    }

    function edit($id_jurnal)
    {
        $data['title'] = 'REVISI JURNAL SKRIPSI';
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['reviewer'] = $this->M_Reviewer->index();
        $data['akun'] = $this->M_User->login();
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
                echo "<script>alert('Berhasil Upload Jurnal')</script>";
                if ($akun['id_kategori'] == 2) {
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                } else {
                    redirect('admin/jurnal/', 'refresh');
                }
            } else {
                echo "<script>alert('Gagal Upload Jurnal')</script>";
                if ($akun['id_kategori'] == 2) {
                    redirect('admin/jurnal/jurnalakun', 'refresh');
                } else {
                    redirect('admin/jurnal/', 'refresh');
                }
            }
        } else {

            echo "<script>alert('File Tdak Boleh Kosong')</script>";
            if ($akun['id_kategori'] == 2) {

                redirect('admin/jurnal/jurnalakun', 'refresh');
            } else {
                redirect('admin/jurnal/', 'refresh');
            }
        }
    }
    function simpan()
    {
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
            $this->M_User->update('user', $data, array('id_user' => $id_user));
            echo "<script>alert('Berhasil Ubah Profil')</script>";
            redirect('admin/akun/index', 'refresh');
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
            $this->M_User->update('user', $data, array('id_user' => $id_user));
            echo "<script>alert('Berhasil Ubah Profil')</script>";
            redirect('admin/akun/index', 'refresh');
        }
    }
    function simpanpassword()
    {

        $this->form_validation->set_rules('password', 'password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['akun'] = $this->M_User->login();
            $data['jk'] = $this->M_Jenis_Kelamin->jk();
            $data['agama'] = $this->M_Agama->agama();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/akun/edit_password', $data);
            $this->load->view('admin/template/footer', $data);
        } else {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $id_user = $this->input->post('id_user');
            $data = array(
                'password' => $password,
            );
            $this->M_User->update('user', $data, array('id_user' => $id_user));
            echo "<script>alert('Berhasil Ubah Password')</script>";
            redirect('admin/akun/index', 'refresh');
        }
    }

    function simpanfoto()
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

                $id_user = $this->input->post('id_user');
                $data = array(
                    'foto' => $file,
                    'nip_nim' => $nip_nim,

                );
                $this->M_User->update('user', $data, array('id_user' => $id_user));
                echo "<script>alert('Gagal Upload Foto Profil')</script>";
                redirect('admin/akun/index', 'refresh');
            } else {
                echo "<script>alert('Gagal Upload Foto Profil')</script>";
                redirect('admin/akun/index', 'refresh');
            }
        } else {

            echo "<script>alert('Gagal Upload Foto Profil')</script>";
            redirect('admin/akun/index', 'refresh');
        }
    }
}
