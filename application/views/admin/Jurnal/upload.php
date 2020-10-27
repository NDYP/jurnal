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
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <a class="" href="<?= base_url('admin/jurnal/tambah'); ?>" title="tambah"><span class="fa fa-plus"></span> Tambah</a>
                    </div>
                    <!-- /.box-header -->
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
                                <?php $no = 0;
                                foreach ($berkas as $x) : $no++; ?>
                                    <tr>

                                        <td><?= $x['nip_nim']; ?></td>
                                        <td><?= $x['nama']; ?></td>
                                        <td><?= $x['id_pembimbing1']; ?>
                                        <td><?= $x['id_pembimbing2']; ?>
                                        <td><a class="btn btn-md" href="<?= site_url('assets/jurnal/' . $x['file']) ?>"><span class="fa fa-file-pdf-o"></span></a>
                                        </td>
                                        <td><?= $x['nama_status_jurnal']; ?></td>
                                        <td><?= $x['nama_status_jurnal1']; ?></td>
                                        <td>
                                            <center>
                                                <a class="" title="Detail" href="<?= base_url('admin/jurnal/detail/' . $x['id_jurnal']); ?>"><span class="fa fa-eye"></span> Lihat</a>
                                                <?php if ($x['id_status_jurnal'] == 3 || $x['id_status_jurnal1'] == 3) { ?>
                                                    <a class="" title="Edit" href="<?= base_url('admin/jurnal/edit/' . $x['id_jurnal']); ?>">| <span class="fa fa-edit"> Edit </span></a>
                                                <?php } ?>
                                                <?php if ($x['id_status_jurnal'] == 1 && $x['id_status_jurnal1'] == 1) { ?>
                                                    <a class="" title="Hapus" href="<?= base_url('admin/jurnal/hapus/' . $x['id_jurnal']); ?>">| <span class="fa fa-edit"> Hapus </span></a>
                                                <?php } ?>
                                            </center>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                        </table>
                    </div>
                    <!-- /.box-body -->

                </div>
            </div>
        </div>
        <!-- /.box -->
        <!-- /.berkas -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->