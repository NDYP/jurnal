<main class="site-main">
    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach ($jurnal as $row) { ?>
                        <div class="single-recent-blog-post">
                            <div class="details mt-20">
                                <div class="thumb">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i><?= $row['nama']; ?></a></li>
                                        <li><a href="#"><i class="ti-notepad"></i><?= date('d F Y', strtotime($row['tgl_upload'])); ?></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="blog-single.html">
                                        <h3 align="left"><?= $row['judul']; ?></h3>
                                    </a>
                                </div>
                                <p align="justify"><?= substr($row['abstrak'], 0, 350);
                                                    echo "..................."; ?></p>
                                <a class="button" href="<?= base_url('beranda/detail/') . $row['id_jurnal']; ?>">Baca Selengkapnya<i class="ti-arrow-right"></i></a>
                            </div>
                            <hr>
                        </div>
                    <?php } ?>
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

                <!-- Start Blog Post Siddebar -->