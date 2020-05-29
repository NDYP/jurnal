<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <div class="single-sidebar-widget post-category-widget">
            <h4 class="single-sidebar-widget__title">ADDITIONAL MENU</h4>
            <ul class="cat-list mt-20">
                <li>
                    <a href="<?= base_url('additional/editor'); ?>" class="d-flex justify-content-between">
                        <p>Editorial</p>
                        <p>(<?= $editor_total; ?>)</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('additional/reviewer'); ?>" class="d-flex justify-content-between">
                        <p>Reviewer</p>
                        <p>(<?= $reviewer_total; ?>)</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('additional/penulis'); ?>" class="d-flex justify-content-between">
                        <p>Penulis</p>
                        <p>(<?= $reviewer_total; ?>)</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="single-sidebar-widget post-category-widget">

            <ul class="cat-list mt-20">
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
        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">TEMPLATE :</h4>
            <div class="popular-post-list">
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="<?= base_url('assets/'); ?>img/blog/thumb/thumb1.png" alt="">
                        <ul class="thumb-info">
                            <li><a href="#">Adam Colinge</a></li>
                            <li><a href="#">Dec 15</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Blog Post Siddebar -->
</div>
</section>
<!--================ End Blog Post Area =================-->
</main>