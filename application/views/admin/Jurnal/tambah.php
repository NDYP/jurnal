<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <a class="" href="<?= base_url('admin/jurnal/jurnalakun'); ?>"><i class="fa fa-arakun-circle-left"></i> Kembali</a>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- SELECT2 EXAMPLE -->
    <?= form_open_multipart('admin/jurnal/tambah') ?>
    <div class="box box-default">
      <div class="box-header with-border bg-navy">
        <center><?= $title; ?></center>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="hidden" class="form-control" name="nip_nim" id="id_penulis" value="<?= $akun['nip_nim']; ?>">
              <input type="hidden" class="form-control" name="id_penulis" id="id_penulis" value="<?= $akun['id_user']; ?>">
              <label>Judul</label>
              <input type="textarea" class="form-control" name="judul" id="judul">
              <?= form_error('judul', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Abstrak</label>
              <div class="box-body pad">
                <form>
                  <textarea id="abstrak" name="abstrak" rows="10" cols="80"></textarea>
                </form>
              </div>
              <?= form_error('abstrak', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>

            <!-- /.form-group -->
            <div class="form-group">
              <label>Kata Kunci</label>
              <input type="textarea" class="form-control" name="kata_kunci" id="kata_kunci">
              <?= form_error('kata_kunci', '<small class="text-danger pl-1">', '</small>'); ?>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-6">

            <div class="form-group">
              <label>Pembimbing 1</label>
              <select name="id_pembimbing1" class="form-control select2" style="width: 100%;">
                <?php foreach ($reviewer as $akun) : ?>
                  <option name="id_pembimbing1" value="<?= $akun['nama']; ?>"><?= $akun['nama']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <?= form_error('id_jk', '<small class="text-danger pl-1">', '</small>'); ?>
            <div class="form-group">
              <label>Pembimbing 2</label>
              <select name="id_pembimbing2" class="form-control select2" style="width: 100%;">
                <?php foreach ($reviewer as $akun) : ?>
                  <option name="id_pembimbing2" value="<?= $akun['nama']; ?>"><?= $akun['nama']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <select name="id_kategori_skripsi" class="form-control select2" style="width: 100%;">
                <?php foreach ($kategori_skripsi as $akun) : ?>
                  <option name="id_kategori_skripsi" value="<?= $akun['id_kategori_skripsi']; ?>"><?= $akun['nama_kategori']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>File Jurnal <small class="text-danger">*Format File DOC/DOCX*</small> </label>
              <div>
                <?= form_upload('file'); ?>
              </div>
            </div>

            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.akun -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn bg-green btn-md" title="simpan"><span class="fa fa-save"></span> Simpan</button>
      </div>
    </div>
    <?= form_close(); ?>
    <!-- /.box -->
    <!-- /.akun -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->