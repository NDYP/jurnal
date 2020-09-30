<link rel="shortcut icon" href="<?= base_url('assets/foto/upr.png'); ?>">
<link href="<?= base_url('assets/') ?>bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">DAFTAR PENGUNJUNG</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <?= form_open('pengunjung/simpan'); ?>
                        <form id="login-form" class="form" action="" method="post">

                            <h3 class="text-center text-info">DAFTAR PENGUNJUNG</h3>
                            <?= $this->session->flashdata('flash'); ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Nama:</label><br>
                                <input type="text" name="nama" id="username" class="form-control">
                                <?= form_error('nip_nim', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">NIM:</label><br>
                                <input type="text" name="nip_nim" id="username" class="form-control">
                                <?= form_error('nip_nim', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                                <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>

                        </form>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>