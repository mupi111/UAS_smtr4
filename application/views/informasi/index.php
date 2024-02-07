<!-- main content -->
<div class="row dashboard">
    <h5><?= $judul ?></h5>
    <span>
        <!-- tombol tambah informasi -->
        <a class="btn btn-penjualan btn-small modal-trigger" href="#modalKaryawan">Add <i
                class="large material-icons left">add</i></a>
    </span>
    <!-- end of tombol tambah informasi -->
    <!-- modal tambah informasi -->
    <div id="modalKaryawan" class="modal modal-fixed-footer">
        <form action="<?= base_url('informasi/add_informasi') ?>" enctype="multipart/form-data" method="post">
            <!-- <?php echo form_open_multipart('informasi/add_informasi'); ?> -->

            <div class="modal-content">
                <h4>Tambah Informasi</h4>
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">maps</i>
                                <input id="judul" name="judul" type="text" class="validate" />
                                <label for="judul">Judul</label>
                            </div>
                            <div class="file-field input-field col s6">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" id="image" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <label for="image">Masukan Gambar</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <i class="material-icons prefix">list</i>
                                <input id="isi" name="isi" type="text" class="validate" />
                                <label for="isi">Isi</label>
                            </div>
                            <div class="input-field col s4">
                                <i class="material-icons prefix">flag</i>
                                <input id="tgl_up" name="tgl_up" type="text" class="validate" />
                                <label for="tgl_up">Tgl Upload</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-close waves-effect waves-green btn-flat blue lighten-1"
                    onclick="M.toast({html: 'Tambah informasi berhasil'})">Confirm</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat red">close</a>
            </div>
        </form>
    </div>
    <!-- end of modal tambah informasi-->
    <!-- modal edit informasi -->
    <?php $no=0; foreach($informasi as $tb_informasi): $no++; ?>
    <div id="modalEditKaryawan<?= $tb_informasi['id_informasi'] ?>" class="modal modal-fixed-footer">
        <form action="<?php echo base_url('informasi/edit_informasi') ?>" enctype="multipart/form-data" method="post">
            <div class="modal-content">
                <h4>Edit Data Informasi</h4>
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <input type="hidden" readonly value="<?= $tb_informasi['id_informasi'];?>" name="id_informasi"
                                id="id_informasi" class="form-control">
                            <div class="input-field col s4">
                                <i class="material-icons prefix">maps</i>
                                <input id="judul" name="judul" type="text"
                                    value="<?= $tb_informasi['judul'];?>" class="validate" />
                                <label for="judul">Judul</label>
                            </div>
                            <div class="file-field input-field col s8">
                                <div class="input-field col s8">
                                    <i class="material-icons prefix">list</i>
                                    <input id="isi" name="isi"
                                        value="<?= $tb_informasi['isi'] ?>" type="text" class="validate" />
                                    <label for="isi">Isi</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <i class="material-icons prefix">flag</i>
                                <input id="tgl_up" name="tgl_up"
                                    value="<?= $tb_informasi['tgl_up'] ?>" type="text" class="validate" />
                                <label for="tgl_up">Tgl Upload</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                    <div class="col-mb-5">
                                        <label for="image">Foto</label>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="<?=base_url()?>/assets/image/<?= $tb_informasi['image']; ?>" class="img-fluid rounded-start" width="300px"alt="...">
                                    </div>
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
    <!-- end of modal edit informasi-->

    <!-- tabel informasi -->
    <div class="col s11 dashboard-main" style="background: white; margin-left: 50px;">
        <table class="striped" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Isi</th>
                    <th>Tgl Upload</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=1; ?>
                <?php foreach($informasi as $tb_informasi): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $tb_informasi['judul'] ?></td>
                    <td><img src="<?= base_url('assets/image/').$tb_informasi['image'] ?>" style="width: 60px;" alt="">
                    <td><?= $tb_informasi['isi'] ?></td>
                    <td><?= $tb_informasi['tgl_up'] ?></td>
                    </td>
                    <td>
                        <span>
                            <div class="btn-floating btn-small red darken-5 tooltipped" data-tooltip="Edit data informasi">
                                <a href="#modalEditKaryawan<?= $tb_informasi['id_informasi'] ?>"
                                    class="modal-trigger waves-circle">
                                    <i class="material-icons">edit</i></a>
                            </div>
                        </span>
                        <span>
                            <div class="btn-floating btn-small teal lighten-1 tooltipped"
                                data-tooltip="Hapus data informasi">
                                <a href="#modalHapus<?= $tb_informasi['id_informasi'] ?>" class="modal-trigger">
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

        <!-- modal hapus data informasi -->
        <?php $no=0; foreach($informasi as $tb_informasi): $no++; ?>
        <div id="modalHapus<?= $tb_informasi['id_informasi'] ?>" class="modal">
            <form action="<?php echo base_url('informasi/delete_informasi') ?>" method="post">
                <div class="modal-content">
                    <p>Anda yakin ingin menghapus data ini?</p>
                    <input type="hidden" readonly value="<?= $tb_informasi['id_informasi'];?>" name="id_informasi"
                        id="id_informasi" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-close waves-effect waves-green btn-flat green lighten-1"
                        onclick="M.toast({html: 'Data berhasil di hapus'})">YES</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat red">NO</a>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
        <!-- end of modal hapus informasi -->
    </div>
    <!-- end of tabel informasi -->
</div>