<?php 
    if (empty($this->session->userdata['level_user'])) {
        redirect(site_url('akses/'));
    }else{
        if ($this->session->userdata['level_user'] == "owner") {
            $master = "hidden";
            $menu_dashboard = "";
            $menu_manajemen_user = "hidden";
            $menu_produk = "";
            $menu_penjualan = "";
            $menu_laporan = "";
            $menu_pembayaran="";
        }else if($this->session->userdata['level_user'] == "karyawan"){
            $master = "";
            $menu_dashboard = "";
            $menu_manajemen_user = "";
            $menu_produk = "";
            $menu_penjualan = "";
            $menu_laporan = "";
            $menu_pembayaran="";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/materialize-css/dist/css/materialize.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <title>Arminareka | Admin</title>
</head>

<body>
    <!-- header -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper grey accent-1">
                <a class="brand-logo" style="margin-left: 20px;">
                <img src="<?= base_url('assets/image/logo.png') ?>" alt="" class="brand-image img-circle elevation-1" style="opacity: .8">
                    ARMINAREKA
                </a>

                <ul class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                            <i class="material-icons left">person</i><?= $this->session->userdata['username'] ?><i
                                class="material-icons right">arrow_drop_down</i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <ul id="dropdown1" class="dropdown-content rounded">
            <li class="divider"></li>
            <li><a href="#modal2" class="modal-trigger">Logout</a></li>
        </ul>
    </div>
    <!-- end of header -->
    <!-- modal logout -->

    <div id="modal2" class="modal">
        <div class="modal-content">
            <p>apa anda ingin Logout?</p>
        </div>
        <div class="modal-footer">
            <a href="<?= site_url('akses/logout') ?>"
                class="modal-close waves-effect waves-green btn-flat green lighten-2">YA</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat red">Tidak</a>
        </div>
    </div>
    <!-- end of modal logout -->

    <!-- sidebar container -->
    <div class="navigation grey lighten-2" id="sidebarList">

        <ul>
            <li <?= $menu_home; ?>
                <?= $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                <a href="<?= site_url('beranda/p') ?>">
                    <span class="material-icons icon">apps</span>
                    <span class="title">Home</span>
                </a>
            </li>

            <li <?= $menu_manajemen_user; ?>
                <?= $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                <a href="<?= site_url('user/p') ?>">
                    <span class="material-icons icon">person</span>
                    <span class="title">User</span>
                </a>
                <ul id="demo">
                    <li>
                        <a href="<?= site_url('user/p') ?>">
                            <span class="material-icons sub-icon">person_add</span>Admin</a>
                    </li>
                    <li>
                        <a href="<?= site_url('konsumen/p') ?>">
                            <span class="material-icons sub-icon">person_add</span>Custumer</a>
                    </li>
                </ul>
            </li>
            <li <?= $menu_pendaftarn; ?>
                <?= $this->uri->segment(1) == 'pendaftar' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                <a href="<?= site_url('pendaftar/p') ?>">
                    <span class="material-icons icon">list</span>
                    <span class="title">Pendaftar</span>
                </a>
            </li>
            <li <?= $menu_informasi; ?>
                <?= $this->uri->segment(1) == 'informasi' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                <a href="<?= site_url('informasi/p') ?>">
                    <span class="material-icons icon">book</span>
                    <span class="title">Informasi</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- end of sidebar Container -->

    <!-- main content -->
    <!-- Content -->
    <section class="content">
        <div class="container-fluid">
            <?php include $folder."/".$p.".php"; ?>
        </div>
    </section>
    <!-- #END# Content -->
    <script src="<?= base_url('assets/laporan/plugins/jquery/jquery.min.js'); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script src="<?= base_url('assets/js/app.js') ?>" type="module"></script>
    <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
    <script type="text/javascript">
    function cetak(div) {
        var b = document.getElementById(div).innerHTML;
        window.frames["print_frame"].document.title = document.title;
        window.frames["print_frame"].document.body.innerHTML = b;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
    </script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    $(document).ready(function() {
        $('textarea#keterangan').characterCounter();
    });
    </script>
</body>

</html>