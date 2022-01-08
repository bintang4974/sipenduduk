<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <a href="<?= base_url('penduduk') ?>" class="btn btn-danger btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                    </div>

                    <div class="container-fluid">
                        <form action="<?= base_url('penduduk/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label>Nama Penduduk</label>
                                    <input type="text" name="nama_penduduk" class="form-control">
                                    <?= form_error('nama_penduduk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nik" class="form-control">
                                    <?= form_error('nik', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>No KK</label>
                                    <input type="text" name="no_kk" class="form-control">
                                    <?= form_error('no_kk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Status KK</label>
                                    <select name="status_kk" class="form-control">
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Ayah">Ayah</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Paman">Paman</option>
                                        <option value="Bibi">Bibi</option>
                                        <option value="Nenek">Nenek</option>
                                        <option value="Kakek">Kakek</option>
                                    </select>
                                    <?= form_error('status_kk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Kode Bansos</label>
                                    <select name="id_bansos" class="form-control">
                                        <option value="">-- Pilih Kode Bansos --</option>
                                        <?php foreach ($bansos as $bns) : ?>
                                            <option value="<?= $bns->id_bansos ?>"><?= $bns->kode_bansos ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?= form_error('id_bansos', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Vaksin 1</label>
                                    <select name="vaksin_satu" class="form-control">
                                        <option value="">-- Pilih Vaksin 1 --</option>
                                        <?php foreach ($vaksin as $vkn) : ?>
                                            <option value="<?= $vkn->id_vaksin ?>"><?= $vkn->jenis_vaksin ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?= form_error('vaksin_satu', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Vaksin 2</label>
                                    <select name="vaksin_dua" class="form-control">
                                        <option value="">-- Pilih Vaksin 2 --</option>
                                        <?php foreach ($vaksin as $vkn) : ?>
                                            <option value="<?= $vkn->id_vaksin ?>"><?= $vkn->jenis_vaksin ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?= form_error('vaksin_dua', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>No Telpon</label>
                                    <input type="text" name="no_telp" class="form-control">
                                    <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                    <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <!-- <div class="form-group">
                                    <label>Foto Penduduk</label>
                                    <input type="file" name="foto_penduduk" class="form-control">
                                </div> -->

                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>