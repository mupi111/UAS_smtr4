<!-- main content -->
<div class="row dashboard">
    <h5><?= $judul ?></h5>

    <!-- tabel customer -->
    <div class="col s11 dashboard-main" style="background: white; margin-left: 50px;">
        <table class="striped" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Username</th>
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
                    <td>
                        <span>
                            <div class="btn-floating btn-small teal lighten-1 tooltipped"
                                data-tooltip="Hapus data customer">
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
        <!-- modal hapus data customer -->
        <?php $no=0; foreach($user as $tb_user): $no++; ?>
        <div id="modalHapus<?= $tb_user['id_user'] ?>" class="modal">
            <form action="<?php echo base_url('konsumen/delete_user') ?>" method="post">
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
        <!-- end of modal hapus customer -->
    </div>
    <!-- end of tabel customer -->
</div>