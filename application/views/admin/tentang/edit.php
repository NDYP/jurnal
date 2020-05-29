<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


        <a class="" href="<?= base_url('admin/tentang/'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

    </section>
    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <?= form_open_multipart('admin/tentang/ubah') ?>
        <div class="box box-default">
            <div class="box-header with-border bg-navy">
                <center><?= $title; ?></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="id_tentang" value="<?= $tentang['id_tentang']; ?>">
                        <div class="form-group">
                            <label>Tentang</label>
                            <div class="box-body pad">
                                <form>
                                    <textarea id="abstrak" name="isi" rows="30" cols="100">
                                            <?= $tentang['isi']; ?></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <div>
                                <?= form_upload('foto'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.akun -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn bg-green btn-md" title="simpan"><span class="fa fa-save"></span> Simpan</button>
            </div>
        </div>
        <?= form_close(); ?>
        <!-- /.box -->
        <!-- /.akun -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->