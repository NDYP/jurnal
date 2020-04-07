<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_User');
        $this->load->model('M_Jurnal');
        $this->load->model('M_Statistik');
    }
    function index()
    {

        $query =  $this->db->query("SELECT COUNT(id_jurnal) as count,MONTHNAME(tgl_upload) 
        as month_name FROM jurnal WHERE YEAR(tgl_upload) = '" . date('Y') . "'
      GROUP BY YEAR(tgl_upload),MONTH(tgl_upload)");
        $record = $query->result();
        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
        }
        $data['chart_data'] = json_encode($data);
        $data['akun'] = $this->M_User->login();
        $data['user'] = $this->M_User->index();
        $data['jurnal'] = $this->M_Jurnal->index();
        $data['jurnal2'] = $this->M_Jurnal->index2();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/template/footer', $data);
    }
}
