<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style_bootstrap.css') ?>" />
    
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

    <!-- image -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8"><br>
                <h2>Form Pendaftaran</h2><br>
                <form action="<?=base_url('home/p'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row my-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $tb_pendaftaran?>"
                            name="nama_pendaftar" placeholder="Nama Pendaftar" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Keluarga">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="ttl" name="ttl" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="jenkel" name="jenkel">
                                <option selected >Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Pendaftar">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor Hp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="ket" name="ket">
                                <option selected >Pilihan Paket</option>
                                <option value="Paket Haji Reguler">Paket Haji Reguler</option>
                                <option value="Paket Haji Bisnis">Paket Haji Bisnis</option>
                                <option value="Paket Haji Eksekutif">Paket Haji Eksekutif</option>
                                <option value="Paket Umrah Reguler">Paket Umrah Reguler</option>
                                <option value="Paket Haji Bisnis">Paket Umrah Bisnis</option>
                                <option value="Paket Umrah Eksekutif">Paket Umrah Eksekutif</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">
                            <label for="formFile" class="form-label">Pas Foto</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary my-2">Daftar</button>
                </form>
                <div class="back mt-2 mb-3">
                    <a href="<?=site_url('home/p');?>" class="btn btn-outline-dark" type="button"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
<!-- 
    <script>
        function previewImg() {
            const FOTO = document.querySelector('#FOTO');
            const FOTOLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            FOTOLabel.textContent = FOTO.files[0].name;  // untuk mengganti URL image nya

            // untuk mengganti file preview nya
            const fileFOTO = new FileReader();
            fileFOTO.readAsDataURL(FOTO.files[0]);

            fileFOTO.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script> -->

    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "";
        }
    </script>

</body>
</html>