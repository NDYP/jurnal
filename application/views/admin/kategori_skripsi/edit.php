<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a class="" href="<?= base_url('admin/kategori_skripsi/'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->

        <div class="col-md-6">
            <?= form_open_multipart('admin/kategori_skripsi/ubah') ?>
            <div class="box box-default">
                <div class="box-header with-border">
                    <center><b><?= $title; ?></b></center>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control" name="id_kategori_skripsi" value="<?= $kategori_skripsi['id_kategori_skripsi']; ?>">
                                    <input type="text" class="form-control" name="nama_kategori" value="<?= $kategori_skripsi['nama_kategori']; ?>">

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
        </div>
        <!-- /.box-body -->

</div>

<!-- /.box -->

<!-- /.row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->