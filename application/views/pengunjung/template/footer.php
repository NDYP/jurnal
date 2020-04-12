  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
      <div class="container">
          <div class="row">

              <div class="col-lg-6">
                  <div class="single-footer-widget">
                      <h6>Layanan</h6>
                      <?php foreach ($layanan as $x) { ?>
                          <div class="media contact-info">
                              <span class="contact-info__icon"><i class="ti-home"></i></span>
                              <div class="media-body">
                                  <p><?= $x['alamat']; ?></p>
                              </div>
                          </div>
                          <div class="media contact-info">
                              <span class="contact-info__icon"><i class="ti-mobile"></i></span>
                              <div class="media-body">
                                  <p><?= $x['no_telepon']; ?></p>
                              </div>
                          </div>
                          <div class="media contact-info">
                              <span class="contact-info__icon"><i class="ti-email"></i></span>
                              <div class="media-body">
                                  <p><?= $x['email']; ?></p>
                              </div>
                          </div>
                          <div class="media contact-info">
                              <span class="contact-info__icon"><i class="ti-world"></i></span>
                              <div class="media-body">
                                  <p><?= $x['website']; ?></p>
                              </div>
                          </div>

                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="single-footer-widget">
                      <h6>Sosial Media</h6>

                      <div class="footer-social d-flex align-items-center">
                          <a href="#">
                              <i class="ti-facebook"></i>
                          </a>
                          <a href="#">
                              <i class="ti-instagram"></i>
                          </a>
                      <?php } ?>
                      </div>
                  </div>
              </div>

          </div>

          <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
              <p class="footer-text m-0">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>
                      document.write(new Date().getFullYear());
                  </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>

      </div>


      </div>
  </footer>
  <!--================ End Footer Area =================-->

  <script src="<?= base_url('assets/') ?>vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
  <script src="<?= base_url('assets/') ?>js/main.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bootstrap/js/bootstrap.js">
  </body>

  </html>