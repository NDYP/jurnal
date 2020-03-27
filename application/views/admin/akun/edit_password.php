<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a class="btn bg-yellow btn-md" href="<?= base_url('admin/akun'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

    </section>

    <!-- Main content -->
   <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <?= form_open_multipart('admin/akun/simpan') ?>
   <div class="box box-default">
      <!-- /.box-header -->
      <div class="box-body">            
            <div class="form-group">
              <label>Password Baru</label>
              <input type="password" class="form-control" name="password">
            </div>

        </div>
        <div class="box-footer">
        <button type="submit" class="btn bg-green btn-sm" title="simpan"><span class="fa fa-save"></span> Simpan</button>
      </div>
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