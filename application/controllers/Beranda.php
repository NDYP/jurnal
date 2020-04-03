<?php
class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_Jurnal');
        $this->load->model('M_User');
        $this->load->model('M_Komentar');
    }
    function index()
    {
        $perpage = 5;

        $offset = $this->uri->segment(3);
        $config['total_rows'] = $this->M_Jurnal->getAll()->num_rows();
        $config['per_page'] = $perpage;


        $config['base_url'] = site_url('beranda/index');
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
        $data['jurnal'] = $this->M_Jurnal->indexpengunjung($perpage, $offset)->result_array();
        $this->load->view('pengunjung/template/header', $data);
        $this->load->view('pengunjung/template/sidebar', $data);
        $this->load->view('pengunjung/beranda/index', $data);
        $this->load->view('pengunjung/template/footer', $data);
    }
    public function detail($id_jurnal)
    {
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['komentar'] = $this->M_Komentar->get_komentar($id_jurnal);
        $this->load->view('pengunjung/template/header', $data);
        $this->load->view('pengunjung/template/sidebar', $data);
        $this->load->view('pengunjung/beranda/detail', $data);
        $this->load->view('pengunjung/template/footer', $data);
    }
}
