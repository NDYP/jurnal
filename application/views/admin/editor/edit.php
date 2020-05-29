<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a class="" href="<?= base_url('admin/editor'); ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->

        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="box">
                    <div class="box-header bg-navy">
                        <center><text>FOTO PROFIL</text></center>
                    </div>
                    <div class="box-body box-profile">
                        <?php if ($editor['foto'] !== NULL) { ?>
                            <img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/mhs/' . $editor['foto']) ?>" style="width: 100%">
                        <?php } ?>
                        <?php if ($editor['foto'] == NULL) { ?>
                            <img src="<?= base_url('assets/') ?>foto/default.png" class="profile-user-img img-responsive img-box" style="width: 100%">
                        <?php } ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-8">
                <?= form_open_multipart('admin/editor/ubah') ?>
                <div class="box">
                    <div class="box-header bg-navy">
                        <center><text><?= $title; ?></text></center>
                    </div>

                    <div class="box-body">
                        <div class="col-md-6">
                            <input type="hidden" value="<?= $editor['id_user']; ?>" name="id_user">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" name="nip_nim" id="nip_nim" value="<?= $editor['nip_nim']; ?>">
                                <?= form_error('nip_nim', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= $editor['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" value="<?= $editor['tempat_lahir']; ?>">
                                <?= form_error('tempat_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" id="datepicker" name="tgl_lahir" value="<?= $editor['tgl_lahir']; ?>">
                                <?= form_error('tgl_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?= $editor['alamat']; ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No.Hp</label>
                                <input type="text" class="form-control" name="no_hp" value="<?= $editor['no_hp']; ?>">
                                <?= form_error('no_hp', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="<?= $editor['email']; ?>">
                                <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <!-- /.form-group -->

                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="id_agama" class="form-control select2" style="width: 100%;">
                                    <?php foreach ($agama as $row) : ?>
                                        <?php if ($editor['id_agama'] == $row['id_agama']) : ?>
                                            <option name="id_agama" value="<?= $row['id_agama']; ?>" selected><?= $row['nama_agama']; ?></option>
                                        <?php else : ?>
                                            <option name="id_agama" value="<?= $row['id_agama']; ?>"><?= $row['nama_agama']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <h5><b>Jenis Kelamin</b></h5>
                                    <?php foreach ($jk as $row) : ?>
                                        <?php if ($editor['id_jk'] == $row['id_jk']) : ?>
                                            <label>
                                                <input name="id_jk" type="radio" class="minimal-red" value="<?= $row['id_jk']; ?>" checked> <?= $row['nama_jk']; ?>
                                            </label>
                                        <?php else : ?>
                                            <label>
                                                <input name="id_jk" type="radio" class="minimal-red" value="<?= $row['id_jk']; ?>"> <?= $row['nama_jk']; ?>
                                            </label>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <?= form_error('id_jk', '<small class="text-danger pl-1">', '</small>'); ?>

                                <div class="form-group">
                                    <label for="">Foto Baru</label>
                                    <?= form_upload('foto'); ?>
                                </div>
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