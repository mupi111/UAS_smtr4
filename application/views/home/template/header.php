<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arminareka Perdana Haji & Umrah Kediri</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style_bootstrap.css')  ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css')?>">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
   
    <!-- Logo -->
    <link rel="shortcut icon" href="<?= base_url('assets/image/design_sablon/logo_biro.jpg'); ?>" type="image/x-icon">
    
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <style>
        #hero {
            width: 100%;
            height: calc(100vh - 110px);
            background: url(<?php echo base_url('assets/image/haji.jpeg') ?>) top center;
            background-size: cover;
            position: relative;
            opacity: 99%;
            }
        
        #cta {
            background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo base_url('assets/image/haji.jpeg') ?>) fixed center center;
            background-size: cover;
            padding: 120px 0;
            }
    </style>
<body>
     <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:arminarekahajikediri@gmail.com">arminarekaperdanakediri@gmail.com</a>
            </div>
            <div class="social-links d-none d-md-block">
                <i> Arminareka Perdana Haji & Umrah Kediri</i>
            </div>
        </div>
    </section>

    <!-- navbar header content -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            
            <a href="<?php echo site_url('home/p')?>" class="brand-logo">
            <div class="logo">
                <a href="beranda_view" class="logo">
                <img src="<?= base_url('assets/image/icon haji.png') ?>"alt="" class="img-fluid"></a>
                <i>Arminareka</i>
            </div>

            <nav id="navbar" class="navbar">
            <ul>
                <li class="center"><a href="<?= site_url('home/p') ?>">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Packet</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">History</a></li>
                <li><a class="nav-link scrollto " href="#review">Review</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <?php $id_user='level_user'; $user=$this->session->userdata($id_user); if($user=="" ): ?>
                <li class="center"><a href="<?= site_url('akses/index') ?>">Login</a></li>
                <!-- <li class="center"><a href=""><?= $this->session->userdata['level_user'] ?></a></li> -->
                <?php else : ?>
                <li class="center"><a href="<?= site_url('pendaftaran/pendaftaran') ?>">Pendaftaran</a></li>

                <li class="center"><a href="<?= site_url('akses/logout') ?>">Logout</a></li>
                <?php endif;?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#" class="menu-icon-container right fixed sidenav-trigger" data-target="mobile-demo"
                onclick="myFunction();">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </a>
        </nav>
    </header>