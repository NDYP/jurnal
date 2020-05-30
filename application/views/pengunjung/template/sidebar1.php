     <!-- Sidebar Widgets Column -->
     <div class="col-md-3">

         <!-- Search Widget -->
         <!-- Side Widget -->

         <div class="card my-4">
             <h5 class="card-header">Info</h5>
             <div class="card-body">
                 <ul class="list-unstyled mb-0">
                     <li>
                         <a class="d-flex justify-content-between">
                             <p>Pengunjung Hari ini</p>
                             <p><?= $jumlah_today; ?></p>
                         </a>
                     </li>
                     <li>
                         <a class="d-flex justify-content-between">
                             <p>Total Pengunjung</p>
                             <p><?= $jumlah_pengunjung; ?></p>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>

         <div class="card my-4">
             <h5 class="card-header">Kategori</h5>
             <div class="card-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <ul class="list-unstyled mb-0">
                             <?php foreach ($kategori_skripsi as $x) { ?>
                                 <li>
                                     <a class="d-flex justify-content-between" href="<?= site_url('beranda/kategori/' . $x['id_kategori_skripsi']); ?>">
                                         <p><?= $x['nama_kategori'] ?></p> <span>(<?= $x['total'] ?>)</span>

                                     </a>

                                 </li>
                             <?php } ?>
                         </ul>
                     </div>

                 </div>
             </div>
         </div>
         <!-- Categories Widget -->
         <div class="card my-4">
             <h5 class="card-header">Additional Menu</h5>
             <div class="card-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <ul class="list-unstyled mb-0">
                             <?php foreach ($reviewer_total as $x) { ?>
                                 <li>
                                     <a class="d-flex justify-content-between" href="<?= site_url('additional/' . $x['nama_kategori']); ?>">
                                         <p><?= $x['nama_kategori']; ?></p>
                                         <p>(<?= $x['total'] ?>)</p>
                                     </a>

                                 </li>
                             <?php } ?>

                         </ul>
                     </div>

                 </div>
             </div>
         </div>
         <div class="card my-4">
             <h5 class="card-header">File</h5>
             <div class="card-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <ul class="list-unstyled mb-0">
                             <?php $no = 0;
                                foreach ($template as $row) : $no++; ?>
                                 <li>
                                     <a class="d-flex justify-content-between" href="<?= site_url('assets/jurnal/template/' . $row['file']) ?>">
                                         <p><?= $row['judul']; ?></p>
                                     </a>
                                 </li>
                             <?php endforeach; ?>
                         </ul>
                     </div>

                 </div>
             </div>
         </div>


     </div>

     </div>
     <!-- /.row -->

     </div>
     <!-- /.container -->