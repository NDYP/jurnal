<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <a class="btn bg-yellow btn-md" href="<?= base_url('admin/reviewer'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
   
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <?= form_open_multipart('admin/reviewer/simpan') ?>
   <div class="box box-default">
      <div class="box-header with-border">
        <center><b><?= $title; ?></b></center>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-6">
              <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" name="nip_nim" id="nip_nim">
              <?= form_error('nip_nim', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" id="password">
                <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            
            <!-- /.form-group -->
            <div class="col-md-12">
              <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama">
              <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-6">
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir">
              <?= form_error('tempat_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="text" class="form-control" id="datepicker" name="tgl_lahir">
              <?= form_error('tgl_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat">
              <?= form_error('alamat', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <div class="col-md-6">
            <div class="form-group">
              <label>No.Hp</label>
              <input type="text" class="form-control" name="no_hp">
              <?= form_error('no_hp', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-6">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email">
              <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            </div>
            <!-- /.form-group -->

            <!-- /.form-group -->
            <div class="col-md-6">
            <div class="form-group">
              <div class="checkbox">
                <h5><b>Jenis Kelamin</b></h5>
                <?php foreach ($jk as $row) : ?>
                  <label>
                    <input name="id_jk" type="checkbox" class="minimal-red" value="<?= $row['id_jk']; ?>"><?= $row['nama_jk']; ?>
                  </label>
                <?php endforeach; ?>
              </div>
              <?= form_error('id_jk', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
          </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Agama</label>
                <select name="id_agama" class="form-control select2" style="width: 100%;">
                  <?php foreach ($agama as $row) : ?>
                    <option name="id_agama" value="<?= $row['id_agama']; ?>"><?= $row['nama_agama']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              </div>
              <div class="col-md-12">
              <div class="form-group">
                <label>Foto</label>
                <div>
                <?= form_upload('foto'); ?>
                </div>
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->