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
        <li class="<?= ($hal == 'dashboard') ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 3) { ?>
        <li class="<?= ($hal == 'jurnal') ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/jurnal/index') ?>">
            <i class="fa fa-book"></i> <span>Jurnal</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 1) { ?>
        <li class="<?= $this->uri->segment(2) == 'jurnal' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/jurnal/review') ?>">
            <i class="fa fa-book"></i> <span>Jurnal</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 2) { ?>
        <li class="<?= $this->uri->segment(2) == 'jurnal' ? 'active' : ''; ?>">
          <a href="<?= base_url('admin/jurnal/jurnalakun') ?>">
            <i class="fa fa-book"></i> <span>Jurnal</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 3) { ?>
        <li class="treeview <?= ($hal == 'editor' ||  $hal == 'reviewer' || $hal == 'penulis') ? 'active' : ''; ?>">
          <a href="#">
            <i class="fa fa-users"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="<?= ($hal == 'editor') ? 'active' : ''; ?>"><a href="<?= base_url('admin/editor') ?>"><i class="fa fa-circle-o"></i> Editor</a></li>
            <li class="<?= ($hal == 'reviewer') ? 'active' : ''; ?>"><a href="<?= base_url('admin/reviewer') ?>"><i class=" fa fa-circle-o"></i> Reviewer</a></li>
            <li class="<?= ($hal == 'penulis') ? 'active' : ''; ?>"><a href="<?= base_url('admin/penulis') ?>"><i class="fa fa-circle-o"></i> Penulis</a></li>
          </ul>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('id_kategori') == 3) { ?>
        <li class="treeview <?= $this->uri->segment(1) == 'layanan' || $hal == 'template_jurnal' || $hal == 'tentang' || $hal == 'kategori_skripsi' ? 'active' : ''; ?>">
          <a href="#">
            <i class="fa fa-user"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $this->uri->segment(1) == 'layanan' ? 'active' : ''; ?>"><a href="<?= base_url('layanan/index2') ?>"><i class="fa fa-circle-o"></i> Layanan</a></li>
            <li class="<?= ($hal == 'template_jurnal') ? 'active' : ''; ?>"><a href="<?= base_url('admin/template_jurnal') ?>"><i class=" fa fa-circle-o"></i> Template Jurnal</a></li>
            <li class="<?= ($hal == 'tentang') ? 'active' : ''; ?>"><a href="<?= base_url('admin/tentang') ?>"><i class=" fa fa-circle-o"></i> Tentang Jurnal</a></li>
            <li class="<?= ($hal == 'kategori_skripsi') ? 'active' : ''; ?>"><a href="<?= base_url('admin/kategori_skripsi') ?>"><i class=" fa fa-circle-o"></i> Kategori Skripsi</a></li>
          </ul>
        </li>
      <?php } ?>
      <li class="treeview <?= ($hal == 'akun') ? 'active' : ''; ?>">
        <a href="#">
          <i class="fa fa-user"></i> <span>Akun</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?= ($hal == 'akun') ? 'active' : ''; ?>"><a href="<?= base_url('admin/akun') ?>"><i class="fa fa-circle-o"></i> Profil</a></li>
        </ul>
      </li>
    </ul>
    </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>