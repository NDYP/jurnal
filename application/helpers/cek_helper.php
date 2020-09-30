<?php


//cek apakah sudah login
function login()
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
    //jika bukan penulis
    if ($user_session != 2) {
        //maka kembali ke akun
        redirect('admin/akun/index');
    }
}
function akses_editor()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_kategori');
    //jika bukan editor
    if ($user_session != 3) {
        //maka kemabli ke akun
        redirect('admin/akun/index');
    }
}
function akses_reviewer()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_kategori');
    //jika bukan reviewer
    if ($user_session != 1) {
        //maka kemabli ke akun
        redirect('admin/akun/index');
    }
}

function akses_dashboard()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_kategori');
    //jika bukan reviewer dan editor
    if ($user_session != 1 && $user_session != 3) {
        //maka kemabli ke akun
        redirect('admin/akun/index');
    }
}
