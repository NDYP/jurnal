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
            <a class="btn bg-red btn-sm" href="<?= base_url('admin/penulis/simpan'); ?>" title="tambah"><span class="fa fa-plus"></span> Tambah</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-hover">
              <thead>
                <tr class="bg-navy">
                  <th>No.</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Email</th>
                  <th>Status Skripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0;
                foreach ($penulis as $row) : $no++; ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nip_nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['tempat_lahir']; ?>, <?= date('d-m-Y', strtotime($row['tgl_lahir'])); ?> </td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['nama_status']; ?></td>
                    <td>
                     <center> <a class="btn bg-navy btn-xs" title="Detail" href="<?= base_url('admin/penulis/detail/' . $row['id_user']); ?>"><span class="fa fa-eye"></span></a>
                      <a class="btn bg-red btn-xs" title="Edit" href="<?= base_url('admin/penulis/edit/' . $row['id_user']); ?>"><span class="fa fa-edit"></span></a>
                      <a class="btn bg-green btn-xs" title="Hapus" href="<?= base_url('admin/penulis/hapus/' . $row['id_user']); ?>"><span class="fa fa-trash"></span></a>
                    </center></td>
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