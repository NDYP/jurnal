<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php if (count($jurnal) > 0) : ?>
                <h3 class="my-4"><?= $title; ?>
                    <small><?= $title2; ?></small>
                </h3>

                <!-- Blog Post -->
                <?php foreach ($jurnal as $row) { ?>
                    <div class="card mb-4">
                        <div class="card-header text-muted">
                            Posted on <?= date('d F Y', strtotime($row['tgl_upload'])); ?>
                            <a href=""><?= $row['nama']; ?></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['judul']; ?></h5>
                            <p class="card-text" align="justify"><?= substr($row['abstrak'], 0, 800);
                                                                    echo "..................."; ?></p>
                        </div>
                        <div class="card-footer">
                            <p>
                                <a href="<?= base_url('beranda/detail/') . $row['id_jurnal']; ?>" class="btn btn-primary">Read More &rarr;</a>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <?= $halaman; ?>
                </ul>
            <?php else :  ?>
                <h3 class="my-4"><?= $title; ?>

                </h3>
                <center>
                    <small>
                        <H4>Tidak Ditemukan!</H4>
                    </small>
                </center>
                </h3>
            <?php endif; ?>


        </div>