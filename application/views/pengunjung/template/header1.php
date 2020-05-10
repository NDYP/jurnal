<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Journal - Skripsi TI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/template/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/template/'); ?>/css/blog-home.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">E-Journal.Skripsi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('beranda'); ?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('tentang'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('layanan'); ?>">Contact</a>
                    </li>
                    <?php if ($this->session->userdata('id_user')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Login_Pengunjung/logout') ?>">Logout</a>
                        </li>
                    <?php elseif ($this->session->userdata('id_user') == NULL) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Login_Pengunjung') ?>">Login</a>
                        </li>
                    <?php endif ?>

                </ul>
            </div>
        </div>
    </nav>