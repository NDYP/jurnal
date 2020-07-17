    <!-- Sidebar Widgets Column -->
    <style>
        .active-pink-2 input.form-control[type=text]:focus:not([readonly]) {
            border-bottom: 1px solid #f48fb1;
            box-shadow: 0 1px 0 0 #f48fb1;
        }

        .active-pink input.form-control[type=text] {
            border-bottom: 1px solid #f48fb1;
            box-shadow: 0 1px 0 0 #f48fb1;
        }

        .active-purple-2 input.form-control[type=text]:focus:not([readonly]) {
            border-bottom: 1px solid #ce93d8;
            box-shadow: 0 1px 0 0 #ce93d8;
        }

        .active-purple input.form-control[type=text] {
            border-bottom: 1px solid #ce93d8;
            box-shadow: 0 1px 0 0 #ce93d8;
        }

        .active-cyan-2 input.form-control[type=text]:focus:not([readonly]) {
            border-bottom: 1px solid #4dd0e1;
            box-shadow: 0 1px 0 0 #4dd0e1;
        }

        .active-cyan input.form-control[type=text] {
            border-bottom: 1px solid #4dd0e1;
            box-shadow: 0 1px 0 0 #4dd0e1;
        }

        .active-cyan .fa,
        .active-cyan-2 .fa {
            color: #4dd0e1;
        }

        .active-purple .fa,
        .active-purple-2 .fa {
            color: #ce93d8;
        }

        .active-pink .fa,
        .active-pink-2 .fa {
            color: #f48fb1;
        }
    </style>
    <div class="col-md-3">

        <!-- Search Widget -->
        <!-- Side Widget -->
        <div class="my-4">
            <!-- Search form -->
            <?= form_open('beranda/cari') ?>
            <input class="form-control" type="text" placeholder="Cari Artikel" aria-label="Search" id="cari" name="cari">
            <?= form_close(); ?>
        </div>
        <div class="card my-4">

            <h5 class="card-header">Info</h5>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a class="d-flex justify-content-between">
                            <p>Pengunjung Hari ini</p>
                            <p><?= $jumlah_today; ?></p>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex justify-content-between">
                            <p>Total Pengunjung</p>
                            <p><?= $jumlah_pengunjung; ?></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card my-4">
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled mb-0">
                            <?php foreach ($kategori_skripsi as $x) { ?>
                                <li>
                                    <a class="d-flex justify-content-between" href="<?= site_url('beranda/kategori/' . $x['id_kategori_skripsi']); ?>">
                                        <p><?= $x['nama_kategori'] ?></p> <span>(<?= $x['total'] ?>)</span>

                                    </a>

                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Additional Menu</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled mb-0">
                            <?php foreach ($reviewer_total as $x) { ?>
                                <li>
                                    <a class="d-flex justify-content-between" href="<?= site_url('additional/' . $x['nama_kategori']); ?>">
                                        <p><?= $x['nama_kategori']; ?></p>
                                        <p>(<?= $x['total'] ?>)</p>
                                    </a>

                                </li>
                            <?php } ?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="card my-4">
            <h5 class="card-header">File</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled mb-0">
                            <?php $no = 0;
                            foreach ($template as $row) : $no++; ?>
                                <li>
                                    <a class="d-flex justify-content-between" href="<?= site_url('assets/jurnal/template/' . $row['file']) ?>">
                                        <p><?= $row['judul']; ?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


    </div>

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->