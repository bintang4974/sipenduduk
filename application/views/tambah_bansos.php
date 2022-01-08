<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <a href="<?= base_url('bansos') ?>" class="btn btn-danger btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                    </div>

                    <div class="container-fluid">
                        <form action="<?= base_url('bansos/tambah_aksi') ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label>Kode Bansos</label>
                                    <input type="text" name="kode_bansos" class="form-control">
                                    <?= form_error('kode_bansos', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Item Bansos</label>
                                    <input type="text" name="item_bansos" class="form-control">
                                    <?= form_error('item_bansos', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

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