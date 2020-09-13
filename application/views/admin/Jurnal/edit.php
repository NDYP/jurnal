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
        <?= form_open_multipart('admin/jurnal/revisi') ?>
        <div class="box box-default">
            <div class="box-header with-border bg-navy">
                <center><?= $title; ?></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id_penulis" id="id_penulis" value="<?= $jurnal['id_penulis']; ?>">
                            <input type="hidden" class="form-control" name="id_jurnal" id="id_jurnal" value="<?= $jurnal['id_jurnal']; ?>">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" value="<?= $jurnal['judul']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Abstrak</label>
                            <div class="box-body pad">
                                <form>
                                    <textarea id="abstrak" name="abstrak" rows="10" cols="80">
                                            <?= $jurnal['abstrak']; ?></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Pembimbing 1</label>
                                <select name="id_pembimbing1" class="form-control select2" style="width: 100%;">
                                    <?php foreach ($reviewer as $akun) : ?>
                                        <?php if ($jurnal['id_pembimbing1'] == $akun['nama']) : ?>
                                            <option name="id_pembimbing1" value="<?= $akun['nama']; ?>" selected><?= $akun['nama']; ?></option>
                                        <?php else : ?>
                                            <option name="id_pembimbing1" value="<?= $akun['nama']; ?>"><?= $akun['nama']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?= form_error('id_jk', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group">
                                <label>Pembimbing 2</label>
                                <select name="id_pembimbing2" class="form-control select2" style="width: 100%;">
                                    <?php foreach ($reviewer as $akun) : ?>
                                        <?php if ($jurnal['id_pembimbing2'] == $akun['nama']) : ?>
                                            <option name="id_pembimbing2" value="<?= $akun['nama']; ?>" selected><?= $akun['nama']; ?></option>
                                        <?php else : ?>
                                            <option name="id_pembimbing2" value="<?= $akun['nama']; ?>"><?= $akun['nama']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="id_kategori_skripsi" class="form-control select2" style="width: 100%;">
                                    <?php foreach ($kategori_skripsi as $akun) : ?>
                                        <?php if ($jurnal['id_kategori_skripsi'] == $akun['id_kategori_skripsi']) : ?>
                                            <option name="id_kategori_skripsi" value="<?= $akun['id_kategori_skripsi']; ?>" selected><?= $akun['nama_kategori']; ?></option>
                                        <?php else : ?>
                                            <option name="id_kategori_skripsi" value="<?= $akun['id_kategori_skripsi']; ?>"><?= $akun['nama_kategori']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>File Jurnal</label>
                                <div>
                                    <?= form_upload('file'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.form-group -->
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