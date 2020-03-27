<?php class M_Login extends CI_Model
{
    //cek nip dan password dosen
    function auth_dosen($nip_nim)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('user.id_kategori !=', 2)
            ->where('user.nip_nim', $nip_nim)
            ->get();
        return $query;
    }

    //cek nim dan password mahasiswa
    function auth_mahasiswa($nip_nim)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->join('kategori', 'user.id_kategori=kategori.id_kategori', 'right')
            ->join('status', 'user.id_status=status.id_status', 'right')
            ->join('agama', 'user.id_agama=agama.id_agama', 'right')
            ->join('jenis_kelamin', 'user.id_jk=jenis_kelamin.id_jk', 'right')
            ->where('user.id_kategori=', 2)
            ->where('user.nip_nim', $nip_nim)
            ->get();
        return $query;
    }
}
