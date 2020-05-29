 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <?php $no = 0;
            foreach ($tentang as $row) : $no++; ?>
             <a class="" title="Edit" href="<?= base_url('admin/tentang/edit/' . $row['id_tentang']); ?>"> <i class="fa fa-edit"></i> Edit</a>


     </section>
     <section class="content">
         <?= $this->session->flashdata('message'); ?>
         <!-- row -->
         <div class="row">
             <div class="col-md-10">
                 <!-- The time line -->

                 <div class="box">
                     <div class="box-body">
                         <tr>
                             <td>
                                 <p align="justify"><?= $row['isi']; ?> </p>
                             </td>
                             <br>
                             <td>
                                 <p align="center"><img class="profile-user-img img-responsive img-box" src="<?= base_url('assets/foto/tentang/' . $row['foto']) ?>" style="width: 50%"></p>
                             </td>
                         </tr>
                     <?php endforeach; ?>
                     </div>


                 </div>
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->

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