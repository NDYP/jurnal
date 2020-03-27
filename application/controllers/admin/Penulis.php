<?php class Penulis extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Penulis');
    $this->load->model('M_Master');
    $this->load->model('M_Akun');
  }

  public function index()
  {
    $data['title'] = "MAHASISWA SKRIPSI";
    $data['penulis'] = $this->M_Penulis->index();
    $data['akun'] = $this->M_Akun->login();
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/penulis/index', $data);
    $this->load->view('admin/template/footer', $data);
  }
  public function simpan()
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
    $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
      'required' => 'Alamat Tidak Boleh Kosong!'
    ]);
    $this->form_validation->set_rules('id_jk', 'id_jk', 'required|trim', [
      'required' => 'Jenis Kelamin Tidak Boleh Kosong!'
    ]);
    $this->form_validation->set_rules('no_hp', 'Tno_hp', 'required|trim', [
      'required' => 'No Hp Tidak Boleh Kosong!'
    ]);
    $this->form_validation->set_rules('email', 'email', 'required|trim', [
      'required' => 'Email Tidak Boleh Kosong!'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "FORM TAMBAH MAHASISWA SKRIPSI";
      $data['jk'] = $this->M_Master->jk();
      $data['agama'] = $this->M_Master->agama();
      $data['akun'] = $this->M_Akun->login();
      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/sidebar', $data);
      $this->load->view('admin/penulis/tambah', $data);
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

          $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
          $data = array(
            'password' => $password,
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
            'id_kategori' => '2',
            'id_status' => '2',
            'tanggal_regis' => time(),
          );
          $this->M_Penulis->tambah('user', $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
            Berhasil Menambahkan Data</div>');
          redirect('admin/penulis/index');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-warning col-md-3" role="alert">Gagal Menambahkan Data</div>');
          redirect('admin/penulis/index');
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
          'id_kategori' => '2',
          'id_status' => '2',
          'tanggal_regis' => time(),
        );
        $this->M_Penulis->tambah('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
          Berhasil Menambahkan Data</div>');
        redirect('admin/penulis/index');
      }
    }
  }
  public function hapus($id_user)
  {
    $data = $this->M_Penulis->get($id_user);
    if ($data) {
      $this->M_Penulis->hapus($id_user);
      $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">Berhasil Menghapus Data</div>');
      redirect('admin/penulis');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-warning col-md-3" role="alert">Data yang dipilih tidak ada</div>');
      redirect('admin/penulis');
    }
  }
  public function detail($id_user)
  {
    $data['title'] = "DETAIL MAHASISWA SKRIPSI";
    $data['penulis'] = $this->M_Penulis->get($id_user);
    $data['akun'] = $this->M_Akun->login();
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/penulis/detail', $data);
    $this->load->view('admin/template/footer', $data);
  }
  public function edit($id_user)
  {
    $data['jk'] = $this->M_Master->jk();
    $data['agama'] = $this->M_Master->agama();
    $data['title'] = "FORM EDIT BIODATA";
    $data['penulis'] = $this->M_Penulis->get($id_user);
    $data['akun'] = $this->M_Akun->login();
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/penulis/edit', $data);
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

        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data = array(
          'password' => $password,
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
        $this->M_Penulis->edit('user', $data, array('id_user' => $id_user));
        $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
            Berhasil Mengedit Data</div>');
        redirect('admin/penulis/index');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warning col-md-3" role="alert">Gagal Menambahkan Data</div>');
        redirect('admin/penulis/index');
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

      );
      $this->M_Penulis->edit('user', $data, array('id_user' => $id_user));
      $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
          Berhasil Mengedit Data</div>');
      redirect('admin/penulis/index');
    }
  }
}
