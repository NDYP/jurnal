<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <section class="content-header">

        </section>
        <!-- SELECT2 EXAMPLE -->
        <?= form_open_multipart('admin/akun/simpanfoto') ?>
        <div class="content-body">

            <div class="col-md-3">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id_user" value="<?= $akun['id_user']; ?>">
                    <input type="hidden" class="form-control" name="nip_nim" value="<?= $akun['nip_nim']; ?>">
                    <div>
                        <?= form_upload('foto'); ?>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-6"><button type="submit" class="btn btn-info btn-sm
                            "><i class="fa fa-save"></i> Simpan</button></div>
        <?= form_close(); ?>
        <!-- /.box -->
        <!-- /.akun -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->