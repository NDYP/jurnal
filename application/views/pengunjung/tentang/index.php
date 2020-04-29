    <!--================ Start Blog Post Area =================-->
    <main class="site-main">
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php foreach ($tentang as $x) { ?>
                            <p align="justify"><?= $x['isi']; ?></p>
                            <br>
                            <p align="center"><img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/tentang/' . $x['foto']) ?>" style="width: 30%"></p>
                        <?php } ?>
                    </div>