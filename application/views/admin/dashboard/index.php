<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php if ($this->session->userdata('id_kategori') == 3 || $this->session->userdata('id_kategori') == 1) { ?>
            <h4>
                <a class="" href="<?= base_url('admin/jurnal/report'); ?>" title="cetak"><span class="fa fa-print"></span> Laporan Artikel Publish Perbulan</a>
            </h4>
        <?php } ?>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-book-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Artikel</span>
                        <span class="info-box-number">
                            <?= $jumlahjurnal; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-book-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Artikel Publish</span>
                        <span class="info-box-number">
                            <?php $no = 0;
                            foreach ($jurnal2 as $row) : $no++; ?>
                                <?= $row['jumlahjurnal']; ?>
                            <?php endforeach; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-purple"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">User</span>
                        <span class="info-box-number">
                            <?php $no = 0;
                            foreach ($user as $row) : $no++; ?>
                                <?= $row['jumlahuser']; ?>
                            <?php endforeach; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">User Online</span>
                        <span class="info-box-number"><?= $user_online; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="chart-container">
                                    <div class="bar-chart-container">
                                        <canvas id="bar-chart" style="height: 180px;"></canvas>
                                    </div>
                                </div>
                                <!-- /.chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="fa fa-sign-in"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">PENGUNJUNG HARI INI</span>
                                        <span class="info-box-number"><?= $jumlah_today; ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="glyphicon glyphicon-hdd"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Total Pengunjung</span>
                                        <span class="info-box-number"><?= $jumlah_pengunjung; ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- ./box-body -->

                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>