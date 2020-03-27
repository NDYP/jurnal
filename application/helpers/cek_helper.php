<?php
function ya()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if ($user_session) {
        redirect('admin/dashboard');
    }
}
function tidak()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if (!$user_session) {
        redirect('admin/jurnal/jurnalakun');
    }
}
function akses()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('nama_kategori');
    if ($user_session != 'Reviewer' || $user_session != 'Editor') {
        redirect('admin/jurnal/jurnalakun');
    }
}
