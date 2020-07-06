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
        redirect('admin/login');
    }
}
function akses_penulis()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_kategori');
    if ($user_session != 2) {
        redirect('admin/dashboard');
    }
}
function akses_editor()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_kategori');
    if ($user_session != 1 || $user_session != 3) {
        redirect('admin/jurnal/jurnalakun');
    }
}
