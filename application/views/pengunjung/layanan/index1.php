  <!-- Page Content -->
  <div class="container">

      <div class="row">

          <!-- Post Content Column -->
          <div class="col-lg-8">
              <div class="section-title text-center">
                  <br>
                  <h2>Contact</h2>

              </div>
              <div class="card-body">
                  <?php foreach ($layanan as $x) { ?>
                      <div class="info">
                          <div>
                              <i class="fa fa-map-marker"></i>
                              <p><?= $x['alamat']; ?></p>
                          </div>

                          <div class="email">
                              <i class="fa fa-phone"></i>
                              <p><?= $x['no_telepon']; ?></p>
                          </div>
                          <div class="email">
                              <i class="fa fa-envelope"></i>
                              <p><?= $x['email']; ?></p>
                          </div>
                          <div>
                              <i class="fa fa-globe"></i>
                              <p><?= $x['website']; ?></p>
                          </div>
                      </div>
                      <div class="social-links">
                          <center>
                              <a href="<?= $x['link_facebook']; ?>" class="btn btn-lg bg-blue"><i class="fa fa-facebook-f pr-1"></i> Facebook</a>
                              <a href="<?= $x['link_instagram']; ?>" class="btn btn-lg bg-red"><i class="fa fa-instagram pr-1"></i> Instagram</a>
                          </center>
                      </div>
                  <?php } ?>

              </div>
              <hr>
              <!-- Comments Form -->
          </div>