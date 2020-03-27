<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="<?= site_url('admin/penulis'); ?>" class="btn bg-yellow btn-sm"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="box">
                    <div class="box-header bg-navy">
                        <center><text>FOTO PROFIL</text></center>
                    </div>
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/mhs/' . $penulis['foto']) ?>" style="width: 100%">
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col -->
            <div class="col-md-8">
                <?= form_open_multipart('admin/penulis/simpan') ?>
                <div class="box box-default">
                    <div class="box-header with-border bg-navy">
                        <center><?= $title; ?></center>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" class="form-control" name="nip_nim" id="nip_nim" value="<?= $penulis['nip_nim']; ?>">
                                    <?= form_error('nip_nim', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                    <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir">
                                    <?= form_error('tempat_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="datepicker" name="tgl_lahir">
                                    <?= form_error('tgl_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat">
                                    <?= form_error('alamat', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No.Hp</label>
                                    <input type="text" class="form-control" name="no_hp">
                                    <?= form_error('no_hp', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email">
                                    <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="checkbox">
                                        <h5><b>Jenis Kelamin</b></h5>
                                        <?php foreach ($jk as $row) : ?>
                                            <label>
                                                <input name="id_jk" type="checkbox" class="minimal-red" value="<?= $row['id_jk']; ?>"> <?= $row['nama_jk']; ?>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                    <?= form_error('id_jk', '<small class="text-danger pl-1">', '</small>'); ?>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="id_agama" class="form-control select2" style="width: 100%;">
                                            <?php foreach ($agama as $row) : ?>
                                                <option name="id_agama" value="<?= $row['id_agama']; ?>"><?= $row['nama_agama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <?= form_upload('foto'); ?>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn bg-green btn-md" title="simpan"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </div>
                <?= form_close(); ?>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>