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
            <a href="<?= site_url('assets/jurnal/' . $jurnal['file']) ?>">DOC/DOCX</a>
          <?php elseif ($this->session->userdata('id_user') == NULL) : ?>
            <a href="<?= site_url('login_pengunjung') ?>">DOC/DOCX</a>
          <?php endif ?>
          <h5 align="center">ABSTRAK</h5>
          <p class="lead" align="justify"><?= $jurnal['abstrak']; ?></p>
        </div>
        <hr>
        <!-- Comments Form -->


      </div>