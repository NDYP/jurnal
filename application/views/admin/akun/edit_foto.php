<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <?= form_open_multipart('admin/akun/simpan') ?>
        <div class="form-group">
                                <div>
                                    <?= form_upload('file'); ?>
                                </div>
                            </div> 
                            <button type="submit" class="btn btn-info btn-xs
                            " ><i class="fa fa-save"></i> Simpan</button> 
        <?= form_close(); ?>
        <!-- /.box -->
        <!-- /.akun -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->