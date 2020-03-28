<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <a class="btn bg-yellow btn-md" href="<?= base_url('admin/akun'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <!-- SELECT2 EXAMPLE -->
        <?= form_open_multipart('admin/akun/simpanpassword') ?>
        <div class="box box-default">
          <!-- /.box-header -->
          <div class="row">
            <div class="col-md-12">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" class="form-control" name="id_user" value="<?= $akun['id_user']; ?>">
                  <label>Password Baru</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn bg-green btn-sm" title="simpan"><span class="fa fa-save"></span> Simpan</button>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <?= form_close(); ?>
    </div>
</div>
<!-- /.box -->


<!-- /.row -->

</section>

</div>

<!-- /.box -->


<!-- /.content -->
</div>
<!-- /.content-wrapper -->