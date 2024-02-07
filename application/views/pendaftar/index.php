<!-- main content -->
<div class="row dashboard">
    <h5><?= $judul ?></h5>
    <!-- modal edit karyawan -->
    <!-- <?php $no=0; foreach($pendaftar as $tb_pendaftar): $no++; ?>
    <div id="modalEditKaryawan<?= $tb_pendaftar['id_pendaftar'] ?>" class="modal modal-fixed-footer">
        <form action="<?= base_url('Pendaftar/edit_pendaftar') ?>" enctype="multipart/form-data" method="POST">
            <div class="modal-content">
                <h4>Edit Data Pendaftar</h4>
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <input type="hidden" readonly value="<?= $tb['id_pendaftar']; ?>" name="id_pendaftar"
                                id="id_pendaftar" class="form-control">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nama_pendaftar" name="nama_pendaftar" type="text"
                                    value="<?= $tb_pendaftar['nama_pendaftar'];?>" class="validate" />
                                <label for="nama_pendaftar">Nama</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">contact</i>
                                <input id="nik" name="nik"
                                    value="<?= $tb_pendaftar['nik'] ?>" type="text" class="validate" />
                                <label for="nik">NIK</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">email</i>
                                <input id="email" name="email"
                                    value="<?= $tb_pendaftar['email'] ?>" type="text" class="validate" />
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">calender</i>
                                <input id="ttl" name="ttl" type="date"
                                value="<?= $tb_pendaftar['ttl'] ?>" class="validate" />
                                <label for="ttl">TTL</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">child_care</i>
                                <select name="jenkel" id="jenkel" value="<?= $tb_pendaftar['jenkel'] ?>">
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="file-field input-field col s6">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" id="image" name="image">
                                </div>
                                <input type="hidden" name="current_image" id="current_image"
                                    value="<?= $tb_pendaftar['image'] ?>">
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <label for="image">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">maps</i>
                                <input id="alamat" name="alamat" type="text" value="<?= $tb_pendaftar['alamat'] ?>" class="validate" />
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">contact_phone</i>
                                <input id="nohp" name="nohp" type="text" value="<?= $tb_pendaftar['nohp'] ?>" class="validate" />
                                <label for="nohp">No.Telepon</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">check</i>
                                <input id="ket" name="ket" type="text"
                                value="<?= $tb_pendaftar['ket'] ?>" class="validate" />
                                <label for="ttl">Pilihan Paket</label>
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
    <?php endforeach; ?> -->
    <!-- end of modal edit Pendaftar-->

    <!-- tabel pendaftar -->
    <div class="col s11 dashboard-main" style="background: white; margin-left: 50px;">
        <table class="striped" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Email</th>
                    <th hidden>TTL</th>
                    <th hidden>Jenis Kelamin</th>
                    <th hidden>Foto</th>
                    <th hidden>Alamat</th>
                    <th hidden>No. Telepon</th>
                    <th hidden>Keterangan</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=1; ?>
                <?php foreach($pendaftar as $tb_pendaftar): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $tb_pendaftar['nama_pendaftar'] ?></td>
                    <td><?= $tb_pendaftar['nik'] ?></td>
                    <td><?= $tb_pendaftar['email'] ?></td>
                    <td hidden><?= $tb_pendaftar['ttl'] ?></td>
                    <td hidden><?= $tb_pendaftar['jenkel'] ?></td>
                    <td hidden><img src="<?= base_url('assets/image/').$tb_produk['image'] ?>" style="width: 60px;" alt=""></td>
                    <td hidden><?= $tb_pendaftar['alamat'] ?></td>
                    <td hidden><?= $tb_pendaftar['nohp'] ?></td>
                    <td hidden><?= $tb_pendaftar['ket'] ?></td>
                    <td>
                        <span>
                            <div class="btn-floating btn-small green tooltipped" data-tooltip="Detail data pendaftar">
                                <a href="#modalDetailPendaftar<?= $tb_pendaftar['id_pendaftar'] ?>"
                                    class="modal-trigger waves-circle">
                                    <i class="material-icons">info</i></a>
                            </div>
                        </span>
                        <!-- <span>
                            <div class="btn-floating btn-small red darken-5 tooltipped" data-tooltip="Edit data pendaftar">
                                <a href="#modalEditKaryawan<?= $tb_pendaftar['id_pendaftar'] ?>"
                                    class="modal-trigger waves-circle">
                                    <i class="material-icons">edit</i></a>
                            </div>
                        </span> -->
                        <span>
                            <div class="btn-floating btn-small teal lighten-1 tooltipped"
                                data-tooltip="Hapus data pendaftar">
                                <a href="#modalHapus<?= $tb_pendaftar['id_pendaftar'] ?>" class="modal-trigger">
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
        <!-- tabel akhir pendaftar -->

        <!--  modal lihat detail pendaftar-->
        <?php $no=0; foreach($pendaftar as $tb_pendaftar): $no++; ?>
        <div id="modalDetailPendaftar<?= $tb_pendaftar['id_pendaftar'] ?>" class="modal modal-fixed-footer">
            <form action="" enctype="multipart/form-data" method="post">
                <div class="modal-content">
                    <h4>Detail Pendaftar</h4>
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <input type="hidden" readonly value="<?= $tb_pendaftar['id_pendaftar'];?>" name="id_pendaftar"
                                    id="id_pendaftar" class="form-control">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="nik" name="nik" type="text"
                                        value="<?= $tb_pendaftar['nik'];?>" class="validate" readonly />
                                    <label for="nik">NIK</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">credit_card</i>
                                    <input id="nama_pendaftar" name="nama_pendaftar" type="text"
                                        value="<?= $tb_pendaftar['nama_pendaftar'];?>" class="validate" readonly />
                                    <label for="nama_pendaftar">Nama</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" name="email" value="<?= $tb_pendaftar['email'] ?>" type="email"
                                    value="<?= $tb_pendaftar['email'];?>" class="validate" readonly />
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_box</i>
                                    <input id="ttl" name="ttl" value="<?= $tb_pendaftar['ttl'] ?>" type="date"
                                    value="<?= $tb_pendaftar['ttl'];?>" class="validate" readonly />
                                    <label for="ttl">Tanggal Lahir</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">child_care</i>
                                    <input id="jenkel" name="jenkel" value="<?= $tb_pendaftar['jenkel'] ?>" type="text"
                                    value="<?= $tb_pendaftar['jenkel'];?>" class="validate" readonly />
                                    <label for="jenkel">Jenis Kelamin</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">business_center</i>
                                    <input id="alamat" name="alamat" value="<?= $tb_pendaftar['alamat'] ?>" type="text"
                                    value="<?= $tb_pendaftar['alamat'];?>" class="validate" readonly />
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">contact_phone</i>
                                    <input id="nohp" name="nohp" value="<?= $tb_pendaftar['nohp'] ?>" type="text"
                                    value="<?= $tb_pendaftar['nohp'];?>" class="validate" readonly />
                                    <label for="nohp">Nomor Handphone</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">check</i>
                                    <input id="ket" name="ket" value="<?= $tb_pendaftar['ket'] ?>" type="text"
                                    value="<?= $tb_pendaftar['ket'];?>" class="validate" readonly />
                                    <label for="ket">Pilihan Paket</label>
                                </div>
                                <div class="input-field col s8">
                                    <div class="col-mb-5">
                                        <label for="image">Foto</label>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="<?=base_url()?>/assets/image/<?= $tb_pendaftar['image']; ?>" class="img-fluid rounded-start" width="300px"alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <a href="#!" class="modal-close waves-effect waves-green btn-flat red">close</a>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
        <!-- end of modal lihat detail pesanan-->

        <!-- modal hapus data pendaftar -->
        <?php $no=0; foreach($pendaftar as $tb_pendaftar): $no++; ?>
        <div id="modalHapus<?= $tb_pendaftar['id_pendaftar'] ?>" class="modal">
            <form action="<?php echo base_url('pendaftar/delete_pendaftar') ?>" method="post">
                <div class="modal-content">
                    <p>Anda yakin ingin menghapus data ini?</p>
                    <input type="hidden" readonly value="<?= $tb_pendaftar['id_pendaftar'];?>" name="id_pendaftar"
                        id="id_pendaftar" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-close waves-effect waves-green btn-flat green lighten-1"
                        onclick="M.toast({html: 'Data berhasil di hapus'})">YES</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat red">NO</a>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
        <!-- end of modal hapus pendaftar -->
    </div>
    <!-- end of tabel pendaftarn -->
</div>