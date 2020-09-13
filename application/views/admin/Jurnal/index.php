<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h4>
      <?= $title; ?>
    </h4>

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="bg-green">
                  <th>No.</th>
                  <th>Foto</th>
                  <th>NIM</th>
                  <th>Penulis</th>
                  <th>Pembimbing 1</th>
                  <th>Pembimbing 2</th>
                  <th>No. Seri</th>
                  <th>File</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0;
                foreach ($jurnal as $row) : $no++; ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td>
                      <!-- Jika foto ada menampilkan foto akun -->
                      <?php if ($row['foto'] !== NULL) { ?>
                        <img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/mhs/' . $row['foto']) ?>" style="width:70px;">
                      <?php } ?>
                      <!-- Jika foto tidak ada menampilkan foto default -->
                      <?php if ($row['foto'] == NULL) { ?>
                        <img src="<?= base_url('assets/') ?>foto/default.png" class="profile-user-img img-responsive img-box" style="width:70px;">
                      <?php } ?>
                    </td>
                    <td><?= $row['nip_nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['id_pembimbing1']; ?>
                      <br>
                      <center>
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown"><?= $row['nama_status_jurnal']; ?>
                            <?php if ($this->session->userdata('nama') == $row['id_pembimbing1'] || $this->session->userdata('id_kategori') == 3) { ?>
                              <span class="fa fa-caret-down"></span></button>

                          <ul class="dropdown-menu">
                            <!-- Jika jika kategori sedang login atau sesi login sebagai reviewer -->
                            <?php if ($this->session->userdata('id_kategori') == 1) { ?>
                              <li><a href="<?= site_url('admin/komentar/revisi_editor/' . $row['id_jurnal']); ?>">Revisi Editor</a></li>
                              <li><a href="<?= site_url('admin/komentar/revisi_penulis/' . $row['id_jurnal']); ?>">Revisi Penulis</a></li>
                            <?php  } ?>

                            <li><a href="<?= site_url('admin/komentar/tidak_publish/' . $row['id_jurnal']); ?>">Tidak Publish</a></li>
                            <li><a href="<?= site_url('admin/komentar/publish/' . $row['id_jurnal']); ?>">Publish</a></li>
                          </ul>
                        <?php  } ?>
                        </div>
                      </center>
                    </td>
                    <td><?= $row['id_pembimbing2']; ?><br>
                      <center>
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown"><?= $row['nama_status_jurnal1']; ?>
                            <?php if ($this->session->userdata('nama') == $row['id_pembimbing2'] || $this->session->userdata('id_kategori') == 3) { ?>
                              <span class="fa fa-caret-down"></span></button>
                          <ul class="dropdown-menu">
                            <?php if ($this->session->userdata('id_kategori') == 1) { ?>
                              <li><a href="<?= site_url('admin/komentar/revisi_editor1/' . $row['id_jurnal']); ?>">Revisi Editor</a></li>
                              <li><a href="<?= site_url('admin/komentar/revisi_penulis1/' . $row['id_jurnal']); ?>">Revisi Penulis</a></li>
                            <?php  } ?>
                            <li><a href="<?= site_url('admin/komentar/tidak_publish1/' . $row['id_jurnal']); ?>">Tidak Publish</a></li>
                            <li><a href="<?= site_url('admin/komentar/publish1/' . $row['id_jurnal']); ?>">Publish</a></li>
                          </ul>
                        <?php  } ?>
                        </div>
                      </center>
                    </td>
                    <td><?= $row['no_seri']; ?></td>
                    <td><a class="btn btn-md" href="<?= site_url('assets/jurnal/' . $row['file']) ?>"><span class="fa fa-file-pdf-o"></span></a>

                    <td>
                      <center><a class="" title="Detail" href="<?= base_url('admin/jurnal/detail/' . $row['id_jurnal']); ?>"><span class="fa fa-eye"></span> Lihat</a>
                        <?php if ($akun['id_kategori'] == 3) { ?>
                          <?php if ($row['id_status_jurnal'] == 2 || $row['id_status_jurnal1'] == 2) { ?>
                            <a class="" title="Hapus" href="<?= base_url('admin/jurnal/edit/' . $row['id_jurnal']); ?>"><span class="fa fa-edit">| Edit </span></a>
                          <?php } ?>
                        <?php } ?>
                      </center>
                    </td>
                  </tr>
                <?php endforeach; ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->