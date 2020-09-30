<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Admin | E-Journal Teknik Informatika</title>
    <link rel="shortcut icon" href="<?= base_url('assets/foto/upr.png'); ?>">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= site_url('assets'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('assets'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= site_url('assets'); ?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets'); ?>/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= site_url('assets'); ?>/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">


        <div class="register-box-body">


            <form action="<?= base_url('admin/login/daftar'); ?>" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <?= form_error('nip_nim', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="NIM" name="nip_nim">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Full name" name="nama">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <?= form_error('tempat_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= form_error('tgl_lahir', '<small class="text-danger pl-1">', '</small>'); ?>
                                <input type="text" class="form-control" id="datepicker" name="tgl_lahir" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <?= form_error('no_hp', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nomor HP" name="no_hp">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <select name="id_agama" class="form-control select2" style="width: 100%;">
                                    <?php foreach ($agama as $row) : ?>
                                        <option name="id_agama" value="<?= $row['id_agama']; ?>"><?= $row['nama_agama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <?= form_error('id_jk', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group">
                                <div class="radio">
                                    <?php foreach ($jk as $row) : ?>
                                        <label>
                                            <input name="id_jk" type="radio" class="minimal-red" value="<?= $row['id_jk']; ?>"><?= $row['nama_jk']; ?>
                                        </label>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="col-md-4">

                            <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <br>
                            <a href="<?= base_url('admin/login'); ?>">Login</a>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
        </div>
        </form>



    </div>
    <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="<?= site_url('assets'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= site_url('assets'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= site_url('assets'); ?>/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>