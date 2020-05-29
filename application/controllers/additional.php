<?php
class Additional extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Jurnal');
        $this->load->model('M_User');
        $this->load->model('M_Komentar');
        $this->load->model('M_Statistik');
        $this->load->model('M_Template_Jurnal');
        $this->load->model('M_Kategori_Skripsi');
    }

    public function editor()
    {
        $data['template'] = $this->M_Template_Jurnal->index()->result_array();
        $perpage = 9;
        $offset = $this->uri->segment(3);
        $config['total_rows'] = $this->M_User->getAlleditor()->num_rows();
        $config['per_page'] = $perpage;
        $config['base_url'] = site_url('additional/editor');
        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();
        $data['editor'] = $this->M_User->indexeditor($perpage, $offset)->result_array();

        $data['reviewer_total'] = $this->M_User->getAllreviewer()->result_array();

        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index();
        $this->load->view('pengunjung/template/header1', $data);
        $this->load->view('pengunjung/additional/index1', $data);
        $this->load->view('pengunjung/template/sidebar1', $data);
        $this->load->view('pengunjung/template/footer1', $data);
    }
    public function reviewer()
    {
        $data['template'] = $this->M_Template_Jurnal->index()->result_array();
        $perpage = 9;
        $offset = $this->uri->segment(3);
        $config['total_rows'] = $this->M_User->getAllreviewer()->num_rows();
        $config['per_page'] = $perpage;
        $config['base_url'] = site_url('additional/reviewer');
        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();
        $data['editor'] = $this->M_User->indexreviewer($perpage, $offset)->result_array();

        $data['reviewer_total'] = $this->M_User->getAllreviewer()->result_array();

        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();
        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index();
        $this->load->view('pengunjung/template/header1', $data);
        $this->load->view('pengunjung/additional/index1', $data);
        $this->load->view('pengunjung/template/sidebar1', $data);
        $this->load->view('pengunjung/template/footer1', $data);
    }
    public function penulis()
    {
        $data['template'] = $this->M_Template_Jurnal->index()->result_array();
        $perpage = 9;
        $offset = $this->uri->segment(3);
        $config['total_rows'] = $this->M_User->getAllpenulis()->num_rows();
        $config['per_page'] = $perpage;
        $config['base_url'] = site_url('additional/penulis');
        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();
        $data['editor'] = $this->M_User->indexpenulis($perpage, $offset)->result_array();

        $data['reviewer_total'] = $this->M_User->getAllreviewer()->result_array();

        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();

        $data['kategori_skripsi'] = $this->M_Kategori_Skripsi->index();
        $this->load->view('pengunjung/template/header1', $data);
        $this->load->view('pengunjung/additional/index1', $data);
        $this->load->view('pengunjung/template/sidebar1', $data);
        $this->load->view('pengunjung/template/footer1', $data);
    }
}
