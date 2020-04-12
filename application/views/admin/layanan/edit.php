<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a class="btn bg-yellow btn-sm" href="<?= base_url('layanan/index2'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="row">
            <div class="col-md-12">
                <?= form_open_multipart('layanan/ubah') ?>
                <div class="box">
                    <div class="box-header bg-navy">
                        <center><text><?= $title; ?></text></center>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <input type="hidden" value="<?= $layanan['id_layanan']; ?>" name="id_layanan">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $layanan['alamat']; ?>">

                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="text" class="form-control" name="no_telepon" value="<?= $layanan['no_telepon']; ?>">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" name="email" value="<?= $layanan['email']; ?>">
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Link Instagram</label>
                                <input type="text" class="form-control" id="link_instagram" name="link_instagram" value="<?= $layanan['link_instagram']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Link Facebook</label>
                                <input type="text" class="form-control" name="link_facebook" value="<?= $layanan['link_facebook']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control" name="website" value="<?= $layanan['website']; ?>">

                            </div>
                            <!-- /.form-group -->

                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn bg-green btn-sm" title="simpan"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>

            <!-- /.col -->
        </div>

        <!-- /.row -->
        <!-- /.box-body -->

</div>

<!-- /.box -->


<!-- /.row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->