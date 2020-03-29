<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <center>
        <div class="image">
          <img src="<?= base_url('assets/') ?>foto/upr.png" style="width: 50%">
        </div>
      </center>
    </div>
    <!-- search form -->
    <?php
    $hal = $this->uri->segment(2);
    ?>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">
        <center>MAIN NAVIGATION</center>
      </li>
      <?php if ($this->session->userdata('id_kategori') == 3 || $this->session->userdata('id_kategori') == 1) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="<?= base_url('assets/') ?>/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 3) { ?>
        <li class="<?= ($hal == 'Jurnal') ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/Jurnal') ?>">
            <i class="fa fa-book"></i> <span>Jurnal</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 1) { ?>
        <li class="<?= $this->uri->segment(3) == 'review' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/Jurnal/review') ?>">
            <i class="fa fa-book"></i> <span>Jurnal</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 3) { ?>
        <li class="treeview <?= ($hal == 'Editor' || $hal == 'Reviewer' || $hal == 'penulis') ? 'active' : ''; ?>">
          <a href="#">
            <i class="fa fa-users"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="<?= ($hal == 'Editor') ? 'active' : ''; ?>"><a href="<?= base_url('admin/Editor') ?>"><i class="fa fa-circle-o"></i> Editor</a></li>
            <li class="<?= ($hal == 'Reviewer') ? 'active' : ''; ?>"><a href="<?= base_url('admin/Reviewer') ?>"><i class=" fa fa-circle-o"></i> Reviewer</a></li>
            <li class="<?= ($hal == 'penulis') ? 'active' : ''; ?>"><a href="<?= base_url('admin/penulis') ?>"><i class="fa fa-circle-o"></i> Penulis</a></li>
          </ul>
        </li>
      <?php } ?>
      <li class="treeview <?= $this->uri->segment(2) == 'profil' || $this->uri->segment(3) == 'jurnalakun' ? 'active' : ''; ?>">
        <a href="#">
          <i class="fa fa-user"></i> <span>Akun</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?= $this->uri->segment(2) == 'profil' ? 'active' : ''; ?>"><a href="<?= base_url('admin/akun') ?>"><i class="fa fa-circle-o"></i> Profil</a></li>
          <?php if ($this->session->userdata('id_kategori') == 2) { ?>
            <li class="<?= $this->uri->segment(3) == 'jurnalakun' ? 'active' : ''; ?>"><a href="<?= base_url('admin/jurnal/jurnalakun') ?>"><i class=" fa fa-circle-o"></i> Upload Jurnal</a></li>
          <?php } ?>
        </ul>
      </li>
    </ul>
    </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>