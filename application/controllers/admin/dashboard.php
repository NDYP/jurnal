<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_User');
        $this->load->model('M_Jurnal');
    }
    function index()
    {
        $data['akun'] = $this->M_User->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
}
