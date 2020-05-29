<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }

        .table-bordered {
            font-size: 1.5mm;
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <img src="assets/img/profile/logo.jpg" style="position: absolute; width: 95px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1; font-weight: bold;">
                    <font face="Arial Rounded MT Bold" font size="2">
                        KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI
                        <br>UNIVERSITAS PALANGKA RAYA
                        <br>FAKULTAS KEDOKTERAN
                        <br>

                </span>
                <small style="line-height: 1;">
                    <font face="Arial Rounded MT Bold" font size="2">
                        Kampus UPR Tunjung Nyaho, Jalan Hendrik Timang, Palangka Raya, Kalimantan Tengah
                        <br>Telepon (0536) 4215402, 4215277, 4215277, 4215179
                        <p>
                            Laman: FK-upr.ac.id; Pos-el (<i>E-mail</i>): f.ked.upr@gmail.com
                        </p>
                </small>
            </td>
        </tr>
    </table>
    <hr class=" line-title">
    <p align="center">
        <font face="Arial Rounded MT Bold" font size="2"> <b> <u>
                    SURAT PERNYATAAN</u></b><br>
    </p>
    <p align="justify">
        <font face="Arial Rounded MT Bold" font size="2">
            Yang bertanda tangan dibawah ini :<br>
    </p>
    <div class="table-responsive">
        <table style="width: 100%;">
            <tbody class>
                <tr>
                    <td valign="top" width="25%">
                        <font face="Arial Rounded MT Bold" font size="2">Nama Lengkap
                    </td>
                    <td width="2">
                        <font face="Arial Rounded MT Bold" font size="2">:
                    </td>
                    <td>
                        <font face="Arial Rounded MT Bold" font size="2"><?= $berkas['nama']; ?>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="25%">
                        <font face="Arial Rounded MT Bold" font size="2">NIM
                    </td>
                    <td width="2">
                        <font face="Arial Rounded MT Bold" font size="2">:
                    </td>
                    <td>
                        <font face="Arial Rounded MT Bold" font size="2"><?= $berkas['nip_nim']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="text" valign="top" width="25%">
                        <font face="Arial Rounded MT Bold" font size="2">Judul Skripsi
                    </td>
                    <td width="2">
                        <font face="Arial Rounded MT Bold" font size="2">:
                    </td>
                    <td>
                        <font face="Arial Rounded MT Bold" font size="2">"<?= $berkas['judul']; ?>"
                    </td>
                </tr>

            </tbody>

        </table>
    </div>
    <br>
    <p align="justify">
        <font face="Arial Rounded MT Bold" font size="2">
            Dinyatakan telah mengumpulkan Jurnal Skripsi ke Jurusan Teknik Informatik, Fakultas Teknik, Universitas Palangkaraya.<br>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="">
        <table border="0" cellspacing="0">
            <tr>
                <td>
                </td>
                <td>
                    <p align="center">
                        <font face="Arial Rounded MT Bold" font size="2">
                            Palangkaraya, <?= tanggal(); ?><br>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="300">
                    <center>
                        <font face="Arial Rounded MT Bold" font size="2">Mengetahui,<br>Ketua Jurusan Teknik Informatika <br> <br><br><br>
                            <p><b><u>Abertun Sagit Sahay, ST.,M.Eng</u></b><br>NIP.
                </td>
                <td width="190" height="120">
                    <center>
                        <font face="Arial Rounded MT Bold" font size="2">Tanda Tangan,<br>Mahasiswa<br><br><br><br>
                            <p><b><u><?= $berkas['nama']; ?></u></b><br>NIM.<?= $berkas['nip_nim']; ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>