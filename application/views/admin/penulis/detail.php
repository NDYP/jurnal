<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="<?= site_url('admin/penulis'); ?>" class="btn bg-yellow btn-sm"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
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
                        <?php if ($penulis['foto'] !== NULL) { ?>
                            <img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/mhs/' . $penulis['foto']) ?>" style="width: 100%">
                        <?php } ?>
                        <?php if ($penulis['foto'] == NULL) { ?>
                            <img src="<?= base_url('assets/') ?>foto/default.png" class="profile-user-img img-responsive img-box" style="width: 100%">
                        <?php } ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col -->
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header bg-navy">
                        <center><text>BIODATA</text></center>
                    </div>
                    <div class="box-body">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table no-border">
                                                <tr>
                                                    <th>NIM </th>
                                                    <td> : <?= $penulis['nip_nim'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Lengkap </th>
                                                    <td> : <?= $penulis['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat, Tanggal Lahir </th>
                                                    <td> : <?= $penulis['tempat_lahir'] ?>, <?= date('d-m-Y', strtotime($penulis['tgl_lahir'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat </th>
                                                    <td> : <?= $penulis['alamat'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td> : <?= $penulis['email'] ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table no-border">

                                                <tr>
                                                    <th>Kontak</th>
                                                    <td> : <?= $penulis['no_hp'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td> : <?= $penulis['nama_jk'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Agama</th>
                                                    <td> : <?= $penulis['nama_agama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Daftar </th>
                                                    <td> : <?= date('d-m-Y', strtotime($penulis['tanggal_regis'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Logout </th>
                                                    <td> : <?= date('d-m-Y', strtotime($penulis['tanggal_logout'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Status Akun</th>
                                                    <td> : <?= $penulis['nama_status'] ?></td>
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
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>