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
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <div class="box-header">
                        <a class="" href="<?= base_url('admin/template_jurnal/simpan'); ?>" title="tambah"><span class="fa fa-plus"></span> Tambah</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-green">
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($jurnal as $row) : $no++; ?>
                                    <tr align="center">
                                        <td><?= $row['judul']; ?></td>
                                        <td><a class="btn btn-lg" href="<?= site_url('assets/jurnal/template/' . $row['file']) ?>"><span class="fa fa-file-pdf-o"></span></a></td>
                                        <td>
                                            <center>
                                                <a class="" title="Edit" href="<?= base_url('admin/template_jurnal/edit/' . $row['id_template_jurnal']); ?>"><span class="fa fa-edit"></span> Edit |</a>
                                                <a class="tombol-hapus" title="Hapus" href="<?= base_url('admin/template_jurnal/hapus/' . $row['id_template_jurnal']); ?>"><span class="fa fa-trash"> Hapus</span></a>
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