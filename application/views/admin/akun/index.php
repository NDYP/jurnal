<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <a href="<?= site_url('admin/akun/edit_foto'); ?>" class=""> Ubah Foto</a> |


        <a href="<?= site_url('admin/akun/edit_profil'); ?>" class=""> Ubah Profil</a> |


        <a href="<?= site_url('admin/akun/edit_password'); ?>" class=""> Ubah Password</a>

    </section>
    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header bg-green">
                        <center><text>PROFILE</text></center>
                    </div>
                    <div class="box-body">
                        <div class="col-md-3">
                            <div class="box-body box-profile">
                                <?php if ($akun['foto'] !== NULL) { ?>
                                    <img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/mhs/' . $akun['foto']) ?>" style="width: 100%">
                                <?php } ?>
                                <?php if ($akun['foto'] == NULL) { ?>
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
                                                    <?php if ($akun['id_kategori'] == 2) { ?>
                                                        <tr>
                                                            <th>NIM</th>
                                                            <td> : <?= $akun['nip_nim'] ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($akun['id_kategori'] == 1) { ?>
                                                        <tr>
                                                            <th>NIP</th>
                                                            <td> : <?= $akun['nip_nim'] ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($akun['id_kategori'] == 3) { ?>
                                                        <tr>
                                                            <th>Username</th>
                                                            <td> : <?= $akun['nip_nim'] ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr>
                                                        <th>Nama Lengkap </th>
                                                        <td> : <?= $akun['nama'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat, Tanggal Lahir </th>
                                                        <td> : <?= $akun['tempat_lahir'] ?>, <?= date('d-m-Y', strtotime($akun['tgl_lahir'])); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat </th>
                                                        <td> : <?= $akun['alamat'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td> : <?= $akun['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kontak</th>
                                                        <td> : <?= $akun['no_hp'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Kelamin</th>
                                                        <td> : <?= $akun['nama_jk'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Agama</th>
                                                        <td> : <?= $akun['nama_agama'] ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table no-border">
                                                    <?php if ($akun['id_kategori'] == 2) { ?>
                                                        <tr>
                                                            <th>Pembimbing 1</th>
                                                            <td> : <?= $akun['id_pembimbing1'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pembimbing 2</th>
                                                            <td> : <?= $akun['id_pembimbing2'] ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr>
                                                        <th>Tanggal Daftar </th>
                                                        <td> : <?= date('d-m-Y', strtotime($akun['tanggal_regis'])); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Logout </th>
                                                        <td> : <?= date('d-m-Y', strtotime($akun['tanggal_logout'])); ?></td>
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

    </section>
    <!-- /.content -->
</div>