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

        .table-bordered {
            font-size: 2.2mm;
            border: 1px solid #000;
        }

        .table td,
        .table th {
            padding: .15rem;

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
                    <br>
                    <font style="color:blue;line-height: 0.5;" face="Arial Rounded MT Bold" font size="5">
                        <br>JURUSAN TEKNIK INFORMATIKA</font>
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
    <p align="center">
        Artikel Jurnal Status Publish<br>
    </p>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Pembimbing 1</th>
            <th>Pembimbing 2</th>
            <th>Kategori</th>
        </tr>
        <?php $no = 0;
        foreach ($publish as $row) {
            $no++; ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->nip_nim; ?></td>
                <td><?= $row->nama; ?></td>
                <td><?= $row->judul; ?></td>
                <td><?= $row->id_pembimbing1; ?></td>
                <td><?= $row->id_pembimbing2; ?></td>
                <td><?= $row->nama_kategori; ?></td>
            </tr>
        <?php } ?>
        <tr>

            <th colspan="7">
                <center>Jumlah</center>
            </th>

        </tr>

        <tr>
            <th colspan="7">
                <center><?= $jumlahpublish; ?></center>
            </th>
        </tr>

    </table>
</body>

</html>