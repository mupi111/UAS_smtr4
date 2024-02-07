<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arminareka | <?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url()?>assets/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body class="yellow lighten-4 ">

    <?= form_open_multipart(site_url('akses/login')); ?>
    <div class="row">
        <div class="col m8">
            <div class="card teal darken-1" style="margin: 60px 2px 0 470px;">
                <div class=" card-content white-text center">
                    <h3 class="card-title"> Login Disini
                    </h3>
                    <?php echo validation_errors(); ?>
                    <div class="row">
                        <div class="input-field col s10">
                            <i class="material-icons prefix">email</i>
                            <input id="email" name="email" type="varchar" class="validate" placeholder="Email" />
                            <!--  <label for="nohp ">NomerHP</label> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s10">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" name="password" type="password" class="validate"
                                placeholder="password" />
                            <!-- <label for="password">Password</label> -->
                        </div>

                    </div>
                </div>
                <div class="card-action center">
                    <button type="submit" class="btn blue lighten-1">Login</button>
                    <p>belum punya akun?<a href="<?=site_url('akses/indexRegister')?>">daftar disini</a> </p>
                </div>
            </div>
        </div>

    </div>
    </div>
    <?php form_close() ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php base_url('assets/js/app.js') ?>" type="module"></script>
</body>

</html>