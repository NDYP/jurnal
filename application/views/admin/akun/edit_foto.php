<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <section class="content-header">
            <a class="btn bg-yellow btn-md" href="<?= base_url('admin/akun'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        </section>
        <!-- SELECT2 EXAMPLE -->
        <div class="content-body">
            <?= form_open_multipart('admin/akun/simpanfoto') ?>
            <div class="form-group">
                <input type="text" class="form-control" name="id_user" value="<?= $akun['id_user']; ?>">
                <input type="text" class="form-control" name="nip_nim" value="<?= $akun['nip_nim']; ?>">
                <div>
                    <?= form_upload('foto'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-xs
                            "><i class="fa fa-save"></i> Simpan</button>
            <?= form_close(); ?>
        </div>
        <!-- /.box -->
        <!-- /.akun -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->