<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="<?= site_url('admin/editor'); ?>" class="btn bg-yellow btn-sm"><span class="fa fa-arrow-circle-left"></span> Kembali</a>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

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
            <!-- /.col -->
            <div class="col-md-9">
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
                                                    <th>NIP </th>
                                                    <td> : <?= $editor['nip_nim'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Lengkap </th>
                                                    <td> : <?= $editor['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat, Tanggal Lahir </th>
                                                    <td> : <?= $editor['tempat_lahir'] ?>, <?= date('d-m-Y', strtotime($editor['tgl_lahir'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat </th>
                                                    <td> : <?= $editor['alamat'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td> : <?= $editor['email'] ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table no-border">

                                                <tr>
                                                    <th>Kontak</th>
                                                    <td> : <?= $editor['no_hp'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td> : <?= $editor['nama_jk'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Agama</th>
                                                    <td> : <?= $editor['nama_agama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Logout </th>
                                                    <td> : <?= date('d-m-Y', strtotime($editor['tanggal_logout'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Status Akun</th>
                                                    <td> : <?= $editor['nama_status'] ?></td>
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