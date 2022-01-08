<?= $this->session->flashdata('pesan'); ?>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('bansos/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Kode Bansos</th>
                    <th>Item Bansos</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($bansos as $bns) : ?>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $bns->kode_bansos ?></td>
                        <td><?= $bns->item_bansos ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $bns->id_bansos ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('bansos/delete/' . $bns->id_bansos) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<?php foreach ($bansos as $bns) : ?>
    <div class="modal fade" id="edit<?= $bns->id_bansos ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Bansos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('bansos/edit/' . $bns->id_bansos) ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group mt-2">
                            <label>Kode Bansos</label>
                            <input type="text" name="kode_bansos" class="form-control" value="<?= $bns->kode_bansos ?>">
                            <?= form_error('kode_bansos', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Item Bansos</label>
                            <input type="text" name="item_bansos" class="form-control" value="<?= $bns->item_bansos ?>">
                            <?= form_error('item_bansos', '<div class="text-small text-danger">', '</div>') ?>
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