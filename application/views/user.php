<?php $this->session->flashdata('pesan'); ?>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nomor Telepon</th>
                    <th>Foto User</th>
                    <th>Hak Akses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($user as $usr) : ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $usr->nama_user ?></td>
                        <td><?= $usr->username ?></td>
                        <td><?= $usr->password ?></td>
                        <td><?= $usr->nomor_telepon ?></td>
                        <td><img src="<?= base_url('assets/foto/' . $usr->foto_user) ?>" width="80px" height="60px"></td>
                        <td>
                            <?php if ($usr->hak_akses == '1') { ?>
                                <span class="badge badge-info">Admin</span>
                            <?php } else { ?>
                                <span class="badge badge-warning">kasir</span>
                            <?php } ?>
                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $usr->id_user ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('user/delete/' . $usr->id_user) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>



<?php foreach ($user as $usr) : ?>
    <!-- Modal -->
    <div class="modal fade" id="edit<?= $usr->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('user/edit/' . $usr->id_user) ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama User</label>
                            <input type="hidden" name="id_user" value="<?= $usr->id_user ?>">
                            <input type="text" name="nama_user" class="form-control" value="<?= $usr->nama_user ?>">
                            <?= form_error('nama_user', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $usr->username ?>">
                            <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" value="<?= $usr->password ?>">
                            <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telpon</label>
                            <input type="text" name="nomor_telepon" class="form-control" value="<?= $usr->nomor_telepon ?>">
                            <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Foto User</label>
                            <img src="<?= base_url('assets/foto/' . $usr->foto_user) ?>" width="80px" height="60px">
                            <input type="file" name="foto_user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Hak Akses</label>
                            <select name="hak_akses" class="form-control">
                                <option value="<?= $usr->hak_akses ?>">
                                    <?php if ($usr->hak_akses == '1') {
                                        echo 'Admin';
                                    } ?>
                                </option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>