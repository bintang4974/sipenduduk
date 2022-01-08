<form action="<?= base_url('user/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" name="nama_user" class="form-control">
        <?= form_error('nama_user', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
        <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control">
        <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form-group">
        <label>Nomor Telpon</label>
        <input type="text" name="nomor_telepon" class="form-control">
        <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form-group">
        <label>Foto User</label>
        <input type="file" name="foto_user" class="form-control">
    </div>
    <div class="form-group">
        <label>Hak Akses</label>
        <select name="hak_akses" class="form-control">
            <option value="">-- Pilih Hak Akses --</option>
            <option value="1">Admin</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary btn-sm mb-4"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm mb-4"><i class="fas fa-trash"></i> Reset</button>
</form>