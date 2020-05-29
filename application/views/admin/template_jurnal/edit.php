<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a class="" href="<?= base_url('admin/template_jurnal/'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <?= form_open_multipart('admin/template_jurnal/ubah') ?>
        <div class="box box-default">
            <div class="box-header with-border">
                <center><b><?= $title; ?></b></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="hidden" class="form-control" name="id_template_jurnal" value="<?= $layanan['id_template_jurnal']; ?>">
                                <input type="text" class="form-control" name="judul" value="<?= $layanan['judul']; ?>">
                                <?= form_error('judul', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>File</label>
                                <div>
                                    <?= form_upload('file'); ?>
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

        <!-- /.box-body -->

</div>
<?= form_close(); ?>
<!-- /.box -->

<!-- /.row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->