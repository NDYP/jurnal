<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <a class="" href="<?= base_url('admin/akun'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <?= form_open_multipart('admin/akun/simpan') ?>
    <div class="box box-default">

      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-12">
              <input type="hidden" class="form-control" name="id_user" value="<?= $akun['id_user']; ?>">
              <div class="form-group">
                <label>NIP</label>
                <input type="text" class="form-control" name="nip_nim" id="nip_nim" value="<?= $akun['nip_nim']; ?>">
              </div>
            </div>

            <!-- /.form-group -->
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $akun['nama']; ?>">
              </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?= $akun['tempat_lahir']; ?>">
              </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" id="datepicker" name="tgl_lahir" value="<?= $akun['tgl_lahir']; ?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $akun['alamat']; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <div class="col-md-6">
              <div class="form-group">
                <label>No.Hp</label>
                <input type="text" class="form-control" name="no_hp" value="<?= $akun['no_hp']; ?>">
              </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?= $akun['email']; ?>">
              </div>
            </div>
            <!-- /.form-group -->

            <!-- /.form-group -->
            <div class="col-md-6">
              <div class="form-group">
                <div class="checkbox">
                  <h5><b>Jenis Kelamin</b></h5>
                  <?php foreach ($jk as $row) : ?>
                    <?php if ($akun['id_jk'] == $row['id_jk']) : ?>
                      <label>
                        <input name="id_jk" type="checkbox" class="minimal-red" value="<?= $row['id_jk']; ?>" checked> <?= $row['nama_jk']; ?>
                      </label>
                    <?php else : ?>
                      <label>
                        <input name="id_jk" type="checkbox" class="minimal-red" value="<?= $row['id_jk']; ?>"> <?= $row['nama_jk']; ?>
                      </label>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Agama</label>
                <select name="id_agama" class="form-control select2" style="width: 100%;">
                  <?php foreach ($agama as $row) : ?>
                    <?php if ($akun['id_agama'] == $row['id_agama']) : ?>
                      <option name="id_agama" value="<?= $row['id_agama']; ?>" selected><?= $row['nama_agama']; ?></option>
                    <?php else : ?>
                      <option name="id_agama" value="<?= $row['id_agama']; ?>"><?= $row['nama_agama']; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="box-footer">
        <button type="submit" class="btn bg-green btn-sm" title="simpan"><span class="fa fa-save"></span> Simpan</button>
      </div>
      <!-- /.row -->
    </div>
    <?= form_close(); ?>
    <!-- /.box -->


    <!-- /.row -->

  </section>

</div>

<!-- /.box -->


<!-- /.content -->
</div>
<!-- /.content-wrapper -->