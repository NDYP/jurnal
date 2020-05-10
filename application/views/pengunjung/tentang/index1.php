  <!-- Page Content -->
  <div class="container">

      <div class="row">

          <!-- Post Content Column -->
          <div class="col-lg-8">
              <div class="card-body">
                  <?php foreach ($tentang as $x) { ?>
                      <p align="justify"><?= $x['isi']; ?></p>
                      <br>
                      <p align="center"><img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/tentang/' . $x['foto']) ?>" style="width: 70%"></p>
                  <?php } ?>
              </div>
              <hr>
              <!-- Comments Form -->
          </div>