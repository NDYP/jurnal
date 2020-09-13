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
        <!-- SELECT2 EXAMPLE -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-default">
                    <?php if ($berkas['file'] == NULL) { ?>
                        <div class="box-header with-border">
                            <a class="" href="<?= base_url('admin/jurnal/tambah'); ?>" title="tambah"><span class="fa fa-plus"></span> Tambah</a>
                        </div>
                    <?php } ?>
                    <?php if (
                        ($berkas['id_status_jurnal'] == 5  || $berkas['id_status_jurnal'] == 4) &&
                        ($berkas['id_status_jurnal1'] == 6 || $berkas['id_status_jurnal1'] == 4)
                    ) : ?>
                        <div class="box-header with-border">
                            <a class="" href="<?= base_url('admin/jurnal/cetak'); ?>" title="cetak"><span class="fa fa-print"></span> Cetak</a>
                        </div>
                    <?php endif; ?>
                    <!-- /.box-header -->
                    <?php if ($berkas['file'] !== NULL) { ?>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-green">
                                        <th>NIM</th>
                                        <th>Penulis</th>
                                        <th>Pembimbing 1</th>
                                        <th>Pembimbing 2</th>
                                        <th>File</th>
                                        <th>Status 1</th>
                                        <th>Status 2</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td><?= $berkas['nip_nim']; ?></td>
                                        <td><?= $berkas['nama']; ?></td>
                                        <td><?= $berkas['id_pembimbing1']; ?>
                                        <td><?= $berkas['id_pembimbing2']; ?>
                                        <td><a class="btn btn-md" href="<?= site_url('assets/jurnal/' . $berkas['file']) ?>"><span class="fa fa-file-pdf-o"></span></a>
                                        </td>
                                        <td><?= $berkas['nama_status_jurnal']; ?></td>
                                        <td><?= $berkas['nama_status_jurnal1']; ?></td>
                                        <td>
                                            <center>
                                                <a class="" title="Detail" href="<?= base_url('admin/jurnal/detail/' . $berkas['id_jurnal']); ?>"><span class="fa fa-eye"></span> Lihat</a>
                                                <?php if ($berkas['id_status_jurnal'] == 3 || $berkas['id_status_jurnal1'] == 3) { ?>
                                                    <a class="" title="Edit" href="<?= base_url('admin/jurnal/edit/' . $berkas['id_jurnal']); ?>">| <span class="fa fa-edit"> Edit </span></a>
                                                <?php } ?>
                                            </center>
                                        </td>

                                    </tr>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- /.box -->
        <!-- /.berkas -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->