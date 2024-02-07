<!-- main content -->
<div class="row dashboard">
    <h5><?= $judul ?></h5>
    <!-- modal edit admin -->
    <?php $no=0; foreach($user as $tb_user): $no++; ?>
    <div id="modalEditKaryawan<?= $tb_user['id_user'] ?>" class="modal modal-fixed-footer">
        <form action="<?php echo base_url('user/edit_user_admin') ?>" method="post">
            <div class="modal-content">
                <h4><?= $judul?></h4>
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <input type="hidden" readonly value="<?= $tb_user['id_user'];?>" name="id_user" id="id_user"
                                class="form-control">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">email</i>
                                <input id="email" name="email" 
                                value="<?= $tb_user['email'] ?>" type="text"
                                    class="validate" />
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="username" name="username" type="text" 
                                value="<?= $tb_user['username'];?>"
                                    class="validate" />
                                <label for="username">Username</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-close waves-effect waves-green btn-flat blue lighten-1"
                    onclick="M.toast({html: 'edit berhasil'})">Confirm</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat red">close</a>
            </div>
        </form>
    </div>
    <?php endforeach; ?>
    <!-- end of modal edit admin-->

    <!-- tabel admin -->
    <div class="col s11 dashboard-main" style="background: white; margin-left: 50px;">
        <table class="striped " id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=1; ?>
                <?php foreach($user as $tb_user): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $tb_user['email'] ?></td>
                    <td><?= $tb_user['username'] ?></td>
                    <td><?= $tb_user['password'] ?></td>
                    <td>
                        <span>
                            <div class="btn-floating btn-small red darken-5 tooltipped"
                                data-tooltip="Edit data karyawan">
                                <a href="#modalEditKaryawan<?= $tb_user['id_user'] ?>"
                                    class="modal-trigger waves-circle">
                                    <i class="material-icons">edit</i></a>
                            </div>
                        </span>
                        <span>
                            <div class="btn-floating btn-small teal lighten-1 tooltipped"
                                data-tooltip="Hapus data karyawan">
                                <a href="#modalHapus<?= $tb_user['id_user'] ?>" class="modal-trigger">
                                    <i class="material-icons">delete</i></a>
                            </div>
                        </span>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
            <tfoot class="right"></tfoot>
        </table>

        <!-- modal hapus data admin -->
        <?php $no=0; foreach($user as $tb_user): $no++; ?>
        <div id="modalHapus<?= $tb_user['id_user'] ?>" class="modal">
            <form action="<?php echo base_url('user/delete_user') ?>" method="post">
                <div class="modal-content">
                    <p>Anda yakin ingin menghapus data ini?</p>
                    <input type="hidden" readonly value="<?= $tb_user['id_user'];?>" name="id_user" id="id_user"
                        class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-close waves-effect waves-green btn-flat green lighten-1"
                        onclick="M.toast({html: 'Data berhasil di hapus'})">YES</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat red">NO</a>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
        <!-- end of modal hapus admin -->
    </div>
    <!-- end of tabel admin -->
</div>