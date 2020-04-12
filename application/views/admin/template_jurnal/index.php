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
                    <div class="box-header">
                        <a class="btn bg-red btn-sm" href="<?= base_url('admin/template_jurnal/simpan'); ?>" title="tambah"><span class="fa fa-plus"></span> Tambah</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-navy">

                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($jurnal as $row) : $no++; ?>
                                    <tr>

                                        <td><?= $row['judul']; ?></td>
                                        <td><a class="btn btn-md" href="<?= site_url('assets/jurnal/template/' . $row['file']) ?>"><span class="fa fa-file-pdf-o"></span></a></td>

                                        <td>
                                            <center>
                                                <a class="btn bg-red btn-xs" title="Edit" href="<?= base_url('admin/template_jurnal/edit/' . $row['id_template_jurnal']); ?>"><span class="fa fa-edit"></span></a>
                                                <a class="btn bg-green btn-xs" title="Hapus" href="<?= base_url('admin/template_jurnal/hapus/' . $row['id_template_jurnal']); ?>"><span class="fa fa-trash"></span></a>

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