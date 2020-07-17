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
            margin: 1px;
            margin-bottom: 1px;
        }

        .x {
            font-size: 1.5mm;
            margin: 1px;
            margin-bottom: 1px;
        }
    </style>
</head>

<body>
    <img src="assets/img/profile/logo.jpg" style="padding:0%;position: absolute; width: 100px; height: auto;">
    <table class="x" style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1; font-weight: bold;">
                    <font style="line-height: 0.5;" face="Arial Rounded MT Bold" font size="3">
                        KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</font>
                    <font face="Arial Rounded MT Bold" font size="3">
                        <br>UNIVERSITAS PALANGKA RAYA</font>
                    <font style="color:blue" face="Arial Rounded MT Bold" font size="5">
                        <br>FAKULTAS TEKNIK</font>

                </span>
                <p style="line-height: 1; margin:1px;">
                    <font face="Arial Rounded MT Bold" font size="1">
                        Kampussssxx Kampus UPR Tunjung Nyaho, Jalan Yos Sudarso Kotak Pos 2/PLKUP Palangka Raya 73112 Kalimantan Tengah - INDONESIA
                        <br>Telepon/Fax: +62 536-3226487; Laman: <a href="about.html">www.upr.ac.id</a> E-mail: <a href="about.html">fakultas_teknik@eng.upr.ac.id</a>

                </p>
            </td>

        </tr>
        <hr class="line-title">
    </table>
    <br>
    <p align="center">
        <font face="Arial Rounded MT Bold" font size="2"> <b> <u>
                    BUKTI PENGUMPULAN JURNAL SKRIPSI</u></b><br>
            <b>NOMOR : <?= $berkas['no_seri']; ?></b>
    </p>
    <p align="justify">
        <font face="Arial Rounded MT Bold" font size="2">
            Kepada YTH :<br>
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
            Kami sampaikan terimakasih karena telah mengumpulkan jurnal skripsi di jurusan Teknik Informatika Fakultas Teknik UPR pada <?= date('d-m-Y H:i:s'); ?>.<br>
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
                            <p><b><u>Abertun Sagit Sahay, ST.,M.Eng<br></u></b>NIP.
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