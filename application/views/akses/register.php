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

    <div class="row">
        <div class="col m8">
            <div class="card teal darken-1" style="margin: 60px 2px 0 470px;">
                <div class=" card-content white-text center">

                    <?= form_open_multipart(site_url('akses/indexRegister')); ?>
                    <h3 class="card-title"> Silakan Daftar Disini
                    </h3>
                    <?php echo validation_errors(); ?>
                    <div class="row">


                        <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input id="username" name="username" type="text" class="validate" placeholder="username" />
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" name="password" type="password" class="validate"
                                placeholder="password" />
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">home</i>
                            <input id="email" name="email" type="text" class="validate" placeholder="email" />
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input id="level_user" name="level_user" type="text" class="validate" hidden
                            placeholder="level_usr" value="konsumen" />
                    </div>
                </div>

            </div>
            <div class="card-action" style="margin: 10px 2px 0 470px;">

                <button type="submit" class="btn blue lighten-1 waves-light">Daftar <i
                        class="material-icons medium left">arrow_forward</i></button>

            </div>
            <?php form_close() ?>

        </div>
    </div>

    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php base_url('assets/js/app.js') ?>" type="module"></script>
</body>

</html>