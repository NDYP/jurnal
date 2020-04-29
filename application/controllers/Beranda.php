<?php
class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Jurnal');
        $this->load->model('M_User');
        $this->load->model('M_Komentar');
        $this->load->model('M_Statistik');
        $this->load->model('M_Layanan');
    }
    public function ip_user()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    public function userAgent()
    {
        $u_agent     = $_SERVER['HTTP_USER_AGENT'];
        $bname       = 'Unknown';
        $platform     = 'Unknown';
        $version     = "";

        $os_array   =   array(
            '/windows nt 10.0/i'     =>  'Windows 10',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );

        foreach ($os_array as $regex => $value) {

            if (preg_match($regex, $u_agent)) {
                $platform    =   $value;
                break;
            }
        }

        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        //  finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = $matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }

        // check if we have a number
        $version = ($version == null || $version == "") ? "?" : $version;

        return array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'   => $pattern
        );
    }
    public function browser_user()
    {
        $browser = $this->userAgent();
        return $browser['name'] . ' v.' . $browser['version'];
    }
    public function os_user()
    {
        $OS = $this->userAgent();
        return $OS['platform'];
    }
    public function index()
    {
        $ip      = $this->ip_user();
        $browser = $this->browser_user();
        $os      = $this->os_user();

        unset($_COOKIE['VISITOR']);

        if (!isset($_COOKIE['VISITOR'])) {

            // Masa akan direkam kembali
            // Tujuan untuk menghindari merekam pengunjung yang sama dihari yang sama.
            // Cookie akan disimpan selama 24 jam
            $duration = time() + 60 * 60 * 24;

            // simpan kedalam cookie browser
            setcookie('VISITOR', $browser, $duration);

            // current time
            $dateTime = date('Y-m-d H:i:s');

            $data = array(
                'ip' => $ip,
                'os' => $os,
                'browser' => $browser,
                'tanggal' => $dateTime
            );
            $this->M_Jurnal->tambah('statistik', $data);
        }

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

        $data['layanan'] = $this->M_Layanan->index()->result_array();

        $data['editor_total'] = $this->M_User->getAlleditor()->num_rows();
        $data['reviewer_total'] = $this->M_User->getAllreviewer()->num_rows();
        $data['penulis_total'] = $this->M_User->getAllpenulis()->num_rows();

        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();

        $this->load->view('pengunjung/template/header', $data);
        $this->load->view('pengunjung/template/sidebar', $data);
        $this->load->view('pengunjung/beranda/index', $data);
        $this->load->view('pengunjung/template/rightbar', $data);
        $this->load->view('pengunjung/template/footer', $data);
    }
    public function detail($id_jurnal)
    {
        $data['layanan'] = $this->M_Layanan->index()->result_array();

        $data['jumlah_pengunjung'] = $this->M_Statistik->pengunjung()->num_rows();
        $data['jumlah_today'] = $this->M_Statistik->pengunjung1()->num_rows();
        $data['editor_total'] = $this->M_User->getAlleditor()->num_rows();
        $data['reviewer_total'] = $this->M_User->getAllreviewer()->num_rows();
        $data['penulis_total'] = $this->M_User->getAllpenulis()->num_rows();
        $data['jurnal'] = $this->M_Jurnal->get($id_jurnal);
        $data['komentar'] = $this->M_Komentar->get_komentar($id_jurnal)->result_array();
        $data['jumlah'] = $this->M_Komentar->get_komentar($id_jurnal)->num_rows();
        $this->load->view('pengunjung/template/header', $data);
        $this->load->view('pengunjung/template/sidebar', $data);
        $this->load->view('pengunjung/beranda/detail', $data);
        $this->load->view('pengunjung/template/rightbar', $data);
        $this->load->view('pengunjung/template/footer', $data);
    }
}
