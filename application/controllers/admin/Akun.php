<?php
class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User'); //memnaggil model M_User
        $this->load->model('M_Jurnal');
        $this->load->model('M_Agama');
        $this->load->model('M_Jenis_Kelamin');
        login();
    }
    function index()
    {
        $data['akun'] = $this->M_User->login(); //memanggil method login model M_User dan dimasukkan ke valiabel
        $this->load->view('admin/template/header', $data); //memanggil header
        $this->load->view('admin/template/sidebar', $data); //memanggil sidebar
        $this->load->view('admin/akun/index', $data); //memanggil index dan memberi variabel untuk ditampilkan
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

    //revisi
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


    //Edit Profil
    function simpan()
    {
        //jika terdapat foto yang diupload
        if ($this->upload->do_upload('foto')) {
            $gbr = $this->upload->data(); //upload dimasukkan kedalam variabel baru
            $config['image_library'] = 'gd2'; //konfigurasi librari upload foto
            $config['source_image'] = './assets/foto/mhs/' . $gbr['file_name']; //konfigurasi folder tempat foto disimpan
            $config['maintain_ratio'] = FALSE; //konfigurasi rasio
            $config['overwrite'] = TRUE; //konfigurasi file ditimpa 
            $config['max_size']  = 1024; //maksimum 1mb atau 1000kb
            $config['new_image'] = './assets/foto/mhs/' . $gbr['file_name'];
            $this->load->library('image_lib', $config); //konfigurasi dimasukkan ke librari image
            $this->image_lib->resize();
            $file = $gbr['file_name']; //nama file foto disimpan ke variabel file

            $nip_nim = $this->input->post('nip_nim'); //input dari form nip_nim disimpan kedalam variabel
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $email = $this->input->post('email');
            $id_jk = $this->input->post('id_jk');
            $id_agama = $this->input->post('id_agama');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $id_user = $this->input->post('id_user');

            //seluruh inputan dimasukkan ke dalam array
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
            //data array dupdate kedalam tabel user dengan id user yang dipilih
            $this->M_User->update('user', $data, array('id_user' => $id_user));
            //menampilkan pemberitahuan
            echo "<script>alert('Berhasil Ubah Profil')</script>";
            //kembali ke method index
            redirect('admin/akun/index', 'refresh');
        }
        //jika tidak terdapat upload foto
        else {
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
            //data array dupdate kedalam tabel user dengan id user yang dipilih
            $this->M_User->update('user', $data, array('id_user' => $id_user));
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/akun/index', 'refresh');
        }
    }

    //Edit Paswword
    function simpanpassword()
    {

        //konfigurasi form error
        $this->form_validation->set_rules('password', 'password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);
        //jika form error jalan
        if ($this->form_validation->run() == FALSE) {
            //kembali ke form atau form kosong
            $data['akun'] = $this->M_User->login();
            $data['jk'] = $this->M_Jenis_Kelamin->jk();
            $data['agama'] = $this->M_Agama->agama();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/akun/edit_password', $data);
            $this->load->view('admin/template/footer', $data);
        }
        //jika inputan form tidak kosong
        else {
            //inputan password di enkripsi dengan teknik hash
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            //inputan id user yg diedit
            $id_user = $this->input->post('id_user');
            //password dimasukkan ke dalam array
            $data = array(
                'password' => $password,
            );

            $this->M_User->update('user', $data, array('id_user' => $id_user));
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/akun/index', 'refresh');
        }
    }

    //Edit Foto
    function simpanfoto()
    {
        $config['upload_path'] = './assets/foto/mhs/'; //path folder tempat disimpan
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa sesuaikan
        $config['file_name'] = $this->input->post('nip_nim'); //nama yang terupload nantinya

        $this->upload->initialize($config);
        //jika file upload tidak kosong
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
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/akun/index', 'refresh');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Boleh Kosong</div>');
                redirect('admin/akun/index', 'refresh');
            }
        }
        //jika file foto tidak dipilih
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Boleh Kosong</div>');
            redirect('admin/akun/index', 'refresh');
        }
    }
}
