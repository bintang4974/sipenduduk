<?= $this->session->flashdata('pesan'); ?>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('penduduk/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Penduduk</th>
                    <th>NIK</th>
                    <th>No KK</th>
                    <th>Status KK</th>
                    <th>Bansos</th>
                    <th>Vaksin 1</th>
                    <th>Vaksin 2</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($penduduk as $pdk) : ?>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $pdk->nama_penduduk ?></td>
                        <td><?= $pdk->nik ?></td>
                        <td><?= $pdk->no_kk ?></td>
                        <td><?= $pdk->status_kk ?></td>
                        <td><?= $pdk->kode_bansos ?></td>
                        <td>
                            <?php if ($pdk->vaksin_satu == 6) { ?>
                                <span class="badge badge-danger">Belum</span>
                            <?php } else { ?>
                                <span class="badge badge-success"><?= $pdk->jenis_vaksin ?></span>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($pdk->vaksin_dua == 6) { ?>
                                <span class="badge badge-danger">Belum</span>
                            <?php } else { ?>
                                <span class="badge badge-success"><?= $pdk->jenis_vaksin ?></span>
                            <?php } ?>
                        </td>
                        <td><?= $pdk->no_telp ?></td>
                        <td><?= $pdk->alamat ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $pdk->id_penduduk ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('penduduk/delete/' . $pdk->id_penduduk) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<?php foreach ($penduduk as $pdk) : ?>
    <div class="modal fade" id="edit<?= $pdk->id_penduduk ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('penduduk/edit/' . $pdk->id_penduduk) ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group mt-2">
                            <label>Nama Penduduk</label>
                            <input type="text" name="nama_penduduk" class="form-control" value="<?= $pdk->nama_penduduk ?>">
                            <?= form_error('nama_penduduk', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control" value="<?= $pdk->nik ?>">
                            <?= form_error('nik', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>No KK</label>
                            <input type="text" name="no_kk" class="form-control" value="<?= $pdk->no_kk ?>">
                            <?= form_error('no_kk', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Status KK</label>
                            <select name="status_kk" class="form-control">
                                <option value=""><?= $pdk->status_kk ?></option>
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
                                <option value=""><?= $pdk->kode_bansos ?></option>
                                <?php foreach ($bansos as $bns) : ?>
                                    <option value="<?= $bns->id_bansos ?>"><?= $bns->kode_bansos ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('id_bansos', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Vaksin 1</label>
                            <select name="vaksin_satu" class="form-control">
                                <option value=""><?= $pdk->jenis_vaksin ?></option>
                                <?php foreach ($vaksin as $vkn) : ?>
                                    <option value="<?= $vkn->id_vaksin ?>"><?= $vkn->jenis_vaksin ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('vaksin_satu', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Vaksin 2</label>
                            <select name="vaksin_dua" class="form-control">
                                <option value=""><?= $pdk->jenis_vaksin ?></option>
                                <?php foreach ($vaksin as $vkn) : ?>
                                    <option value="<?= $vkn->id_vaksin ?>"><?= $vkn->jenis_vaksin ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('vaksin_dua', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="text" name="no_telp" class="form-control" value="<?= $pdk->no_telp ?>">
                            <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $pdk->alamat ?>">
                            <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
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