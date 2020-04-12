<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php if ($this->session->userdata('id_kategori') == 1) { ?>
            <a href="<?= site_url('admin/jurnal/review'); ?>" class="btn bg-yellow btn-sm"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
        <?php } ?>
        <?php if ($this->session->userdata('id_kategori') == 3) { ?>
            <a href="<?= site_url('admin/jurnal/index'); ?>" class="btn bg-yellow btn-sm"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
        <?php } ?>
        <?php if ($this->session->userdata('id_kategori') == 2) { ?>
            <a href="<?= site_url('admin/jurnal/jurnalakun'); ?>" class="btn bg-yellow btn-sm"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
        <?php } ?>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header bg-green">
                        <center><text>BIODATA PENULIS</text></center>
                    </div>
                    <div class="box-body">
                        <div class="col-md-3">
                            <div class="box-body box-profile">
                                <?php if ($jurnal['foto'] !== NULL) { ?>
                                    <img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/mhs/' . $jurnal['foto']) ?>" style="width: 100%">
                                <?php } ?>
                                <?php if ($jurnal['foto'] == NULL) { ?>
                                    <img src="<?= base_url('assets/') ?>foto/default.png" class="profile-user-img img-responsive img-box" style="width: 100%">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table no-border">
                                                    <tr>
                                                        <th>NIM </th>
                                                        <td> : <?= $jurnal['nip_nim'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Lengkap </th>
                                                        <td> : <?= $jurnal['nama'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat, Tanggal Lahir </th>
                                                        <td> : <?= $jurnal['tempat_lahir'] ?>, <?= date('d-m-Y', strtotime($jurnal['tgl_lahir'])); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat </th>
                                                        <td> : <?= $jurnal['alamat'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td> : <?= $jurnal['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kontak</th>
                                                        <td> : <?= $jurnal['no_hp'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Kelamin</th>
                                                        <td> : <?= $jurnal['nama_jk'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Agama</th>
                                                        <td> : <?= $jurnal['nama_agama'] ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table no-border">
                                                    <tr>
                                                        <th>Pembimbing 1</th>
                                                        <td> : <?= $jurnal['id_pembimbing1'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pembimbing 2</th>
                                                        <td> : <?= $jurnal['id_pembimbing2'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Tanggal Logout </th>
                                                        <td> : <?= date('d-m-Y', strtotime($jurnal['tanggal_logout'])); ?></td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.user-block -->
                                </div>

                                <!-- /.post -->
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header bg-green">
                        <center><text>JURNAL SKRIPSI</text></center>
                    </div>
                    <div class="box-body">
                        <div class="col-md-8">
                            <div class="box-body box-profile">

                                <center>
                                    <h4><b><?= $jurnal['judul'] ?></b></h3>
                                </center>

                                <br>
                                <th>PDF</th>
                                <td> :
                                    <a class="btn btn-md" href="<?= site_url('assets/jurnal/' . $jurnal['file']) ?>"><span class="fa fa-file-pdf-o"></span></a>
                                    </a>
                                    <h4>ABSTRAK</h4>

                                    <small class="text"><?= $jurnal['abstrak']; ?></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box-body">
                                        <div class="box no-border">
                                            <div class="box-header">
                                                <i class="fa fa-comments-o"></i>
                                                <h3 class="box-title">Komentar Revisi</h3>
                                            </div>
                                            <div class="box-body chat" id="chat-box">
                                                <?php foreach ($komentar as $row) { ?>
                                                    <div class="item">
                                                        <?php if ($row['foto'] !== NULL) { ?>
                                                            <img src="<?= base_url('assets/foto/mhs/' . $row['foto']) ?>" alt="user image" class="img-box">
                                                        <?php } ?>
                                                        <?php if ($row['foto'] == NULL) { ?>
                                                            <img src="<?= base_url('assets/') ?>foto/default.png" alt="user image" class="img-box">
                                                        <?php } ?>
                                                        <p class="message">
                                                            <a href="#" class="name">
                                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?= date('H:i, d-m-Y', strtotime($row['tanggal']));  ?></small>
                                                                <?= $row['nama']; ?>
                                                            </a>
                                                            <?= $row['komentar']; ?>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!-- /.chat -->
                                            <?php if ($akun['id_kategori'] == 1) { ?>
                                                <div class="box-footer">
                                                    <?= form_open('admin/jurnal/komentar'); ?>
                                                    <div class="input-group">
                                                        <input class="hidden" name="id_user" value="<?= $akun['id_user']; ?>">
                                                        <input class="hidden" name="id_jurnal" value="<?= $jurnal['id_jurnal'] ?>">
                                                        <input class="form-control" name="komentar" placeholder="Type message...">
                                                        <div class="input-group-btn">
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <?= form_close(); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>