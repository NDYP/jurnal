<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php foreach ($editor as $x) { ?>
                        <div class="col-md-4">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <?php if ($x['foto'] !== NULL) { ?>
                                        <img src="<?= base_url('assets/foto/mhs/' . $x['foto']) ?>" alt="user image" class="card-img rounded-0">
                                    <?php } ?>
                                    <?php if ($x['foto'] == NULL) { ?>
                                        <img src="<?= base_url('assets/') ?>foto/default.png" alt="user image" class="card-img rounded-0">
                                    <?php } ?>
                                    <a href="blog-single.html">
                                        <h3><?= $x['nama']; ?></h3>
                                        <h3><?= $x['nip_nim']; ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div> <?php }; ?>
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