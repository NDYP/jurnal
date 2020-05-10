<style type="text/css">
    body {
        margin-top: 20px;
        background: #eee;
    }

    /* CONTACTS */
    .contact-box {
        background-color: #ffffff;
        border: 1px solid #e7eaec;
        padding: 20px;
        margin-bottom: 20px;
    }

    .contact-box>a {
        color: inherit;
    }

    .contact-box.center-version {
        border: 1px solid #e7eaec;
        padding: 0;
    }

    .contact-box.center-version>a {
        display: block;
        background-color: #ffffff;
        padding: 20px;
        text-align: center;
    }

    .contact-box.center-version>a img {
        width: 80px;
        height: 80px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .contact-box.center-version address {
        margin-bottom: 0;
    }

    .contact-box .contact-box-footer {
        text-align: center;
        background-color: #ffffff;
        border-top: 1px solid #e7eaec;
        padding: 15px 20px;
    }

    a {
        text-decoration: none !important;
    }
</style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php foreach ($editor as $x) { ?>
                        <div class="col-md-4">
                            <div class="contact-box center-version">
                                <a href="#profile.html">
                                    <?php if ($x['foto'] !== NULL) { ?>
                                        <img src="<?= base_url('assets/foto/mhs/' . $x['foto']) ?>" alt="user image" class="card-img rounded-0">
                                    <?php } ?>
                                    <?php if ($x['foto'] == NULL) { ?>
                                        <img src="<?= base_url('assets/') ?>foto/default.png" alt="user image" class="card-img rounded-0">
                                    <?php } ?>
                                    <div class="font-bold"><strong> <u> <?= $x['nama']; ?></strong></u></div>
                                    <div class="font-bold"> <strong><?= $x['nip_nim']; ?></strong> </div>
                                    <address class="m-t-md">
                                        <i class="fa fa-building"></i><?= $x['tempat_lahir']; ?>, <?= date('d-m-Y', strtotime($x['tgl_lahir'])); ?>.<br>
                                        <i class="fa fa-map-marker"></i> <?= $x['alamat']; ?><br>
                                        <i class="fa fa-envelope"></i> <?= $x['email']; ?><br>
                                        <i class="fa fa-phone"></i> <?= $x['no_hp']; ?>
                                    </address>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <?= $halaman; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>