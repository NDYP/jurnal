  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <div class="card-body">
          <!-- Title -->
          <h3 class="mt-4" align="left"><?= $jurnal['judul']; ?></h3>

          <!-- Author -->
          <p class="lead">
            Oleh :
            <?= $jurnal['nama']; ?>
          </p>



          <hr>
          <!-- Post Content -->
          <p class="small">Posted on <?= date('d F Y, H:i', strtotime($jurnal['tgl_upload'])); ?></p>
          <?php if ($this->session->userdata('id_user')) : ?>
            <a href="<?= site_url('assets/jurnal/' . $jurnal['file']) ?>">PDF</a>
          <?php elseif ($this->session->userdata('id_user') == NULL) : ?>
            <a href="<?= site_url('login_pengunjung') ?>">PDF</a>
          <?php endif ?>
          <h5 align="center">ABSTRAK</h5>
          <p class="lead" align="justify"><?= $jurnal['abstrak']; ?></p>
        </div>
        <hr>
        <!-- Comments Form -->
        <h4 class="card-title"> <?= $jumlah; ?> Komentar Penguji :</h4>
        <div class="card-body">
          <?php foreach ($komentar as $row) { ?>
            <div class="media mb-4">
              <?php if ($row['foto'] !== NULL) { ?>
                <img width="60" height="60" src="<?= base_url('assets/foto/mhs/' . $row['foto']) ?>" alt="user image" class="d-flex mr-3 rounded-circle">
              <?php } ?>
              <?php if ($row['foto'] == NULL) { ?>
                <img width="60" height="60" src="<?= base_url('assets/') ?>foto/default.png" alt="user image" class="d-flex mr-3 rounded-circle">
              <?php } ?>
              <div class="media-body">
                <h5 class="mt-0"><?= $row['nama']; ?></h5>
                <p class="small pull-left"><?= date('d F Y, H:i', strtotime($row['tanggal'])); ?></p>
                <p align="justify"> <?= $row['komentar']; ?></p>
              </div>
            </div>
          <?php } ?>
          <!-- Comment with nested comments -->
        </div>

      </div>