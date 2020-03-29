<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->model('M_Akun');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Reviewer');
        $this->load->model('M_Master');
    }
    function index()
    {
        $data['akun'] = $this->M_Akun->login();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
}
