<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php if ($akun['id_kategori'] == 2) { ?>
            <a class="" href="<?= base_url('admin/jurnal/jurnalakun'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        <?php  } ?>
        <?php if ($akun['id_kategori'] == 3) { ?>
            <a class="" href="<?= base_url('admin/jurnal/'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        <?php  } ?>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <?= form_open_multipart('admin/jurnal/cetak') ?>
        <div class="box box-default">
            <div class="box-header with-border bg-navy">
                <center>
                    <?= $title; ?>
                </center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id_penulis" id="id_penulis" value="<?= $jurnal['id_penulis']; ?>">
                            <input type="hidden" class="form-control" name="id_jurnal" id="id_jurnal" value="<?= $jurnal['id_jurnal']; ?>">
                            <label>Nomor Surat</label> <small class="text-danger">*isi titik-titik*</small>
                            <input type="text" class="form-control" name="no_seri" id="no_seri" value=". . ./UN24.6.4/. . .-2020">
                        </div>
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!-- /.akun -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn bg-green btn-md" title="simpan"><span class="fa fa-save"></span> Cetak</button>
            </div>
        </div>
        <?= form_close(); ?>
        <!-- /.box -->
        <!-- /.akun -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->