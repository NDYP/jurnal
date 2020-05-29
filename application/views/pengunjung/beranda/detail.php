    <!--================ Start Blog Post Area =================-->
    <main class="site-main">
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <h4 align="center"><?= $jurnal['judul']; ?></h4>
                            <div class="user_details">
                                <div class="float-left">
                                    <?php if ($this->session->userdata('id_user')) : ?>
                                        <a href="<?= site_url('assets/jurnal/' . $jurnal['file']) ?>">PDF</a>
                                    <?php elseif ($this->session->userdata('id_user') == NULL) : ?>
                                        <a href="<?= site_url('login_pengunjung') ?>">PDF</a>
                                    <?php endif ?>
                                </div>
                                <div class="float-right mt-sm-0 mt-3">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5><?= $jurnal['nama']; ?></h5>
                                            <p><?= date('d F Y, H:i:s', strtotime($jurnal['tgl_upload'])); ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <img width="42" height="42" src="<?= base_url('assets/foto/mhs/' . $jurnal['foto']) ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p align="justify"><?= $jurnal['abstrak']; ?></p>
                        </div>
                        <hr>
                        <div class="comments-area">
                            <h4>

                                <?= $jumlah; ?>
                                </span> Komentar Penguji</h4>
                            <?php foreach ($komentar as $row) { ?>
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="col-md-3">
                                                <div class="thumb">
                                                    <?php if ($row['foto'] !== NULL) { ?>
                                                        <img width="42" height="42" src="<?= base_url('assets/foto/mhs/' . $row['foto']) ?>" alt="user image" class="offline">
                                                    <?php } ?>
                                                    <?php if ($row['foto'] == NULL) { ?>
                                                        <img width="42" height="42" src="<?= base_url('assets/') ?>foto/default.png" alt="user image" class="offline">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="desc">
                                                    <h5><a href="#"><?= $row['nama']; ?></a></h5>
                                                    <p class="date"><?= date('d F Y, H:i:s', strtotime($row['tanggal'])); ?></p>
                                                    <p class="comment" align="justify">
                                                        <?= $row['komentar']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>