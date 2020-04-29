    <!--================ Start Blog Post Area =================-->
    <main class="site-main">
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">


                    <?php foreach ($layanan as $x) { ?>
                        <div class="col-md-6">
                            <h3>Kontak</h3>
                            <br>

                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3><?= $x['alamat']; ?></h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-mobile"></i></span>
                                <div class="media-body">
                                    <h3><a href="tel:454545654"><?= $x['no_telepon']; ?></a></h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3><a href="mailto:support@colorlib.com"><?= $x['email']; ?></a></h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-world"></i></span>
                                <div class="media-body">
                                    <h3><a href="mailto:support@colorlib.com"><?= $x['website']; ?></a></h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="single-footer-widget">
                                        <h3>Sosial Media</h3>
                                        <br>
                                        <div class="footer-social d-flex align-items-center">
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    <?php } ?>