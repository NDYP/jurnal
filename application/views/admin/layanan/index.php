<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            <?= $title; ?>
        </h4>

    </section>

    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-navy">

                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Link IG</th>
                                    <th>Link FB</th>
                                    <th>Website</th>
                                    <th>No. Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($layanan as $row) : $no++; ?>
                                    <tr>

                                        <td><?= $row['alamat']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['link_instagram']; ?></td>
                                        <td><?= $row['link_facebook']; ?></td>
                                        <td><?= $row['website']; ?></td>
                                        <td><?= $row['no_telepon']; ?></td>
                                        <td>
                                            <center>
                                                <a class="btn bg-red btn-xs" title="Edit" href="<?= base_url('layanan/edit/' . $row['id_layanan']); ?>"><span class="fa fa-edit"></span></a>

                                            </center></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->