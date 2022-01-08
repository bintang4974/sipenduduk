<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters my-1 mx-1">
        <div class="col-md-4">
            <img alt="image" src="<?= base_url('assets/foto/' . $this->session->userdata('foto_user')) ?>" class="rounded-circle mr-1" width="150px" height="150px">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title mb-2"><?= $this->session->userdata('nama_user') ?></h5>
                <p class="card-text"><?= $this->session->userdata('nomor_telepon') ?> |
                    <?php if ($this->session->userdata('hak_akses') == '1') { ?>
                        <span class="badge badge-info">Admin</span>
                    <?php } ?>
                </p>
                <p class="card-text"><small class="text-muted">Dibuat : <?= $this->session->userdata('nama_user') ?></small></p>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- <div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $barang ?></h3>

                <p>Barang</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url('barang') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $user ?></h3>

                <p>Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $invoice ?></h3>

                <p>Invoice</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?= base_url('transaksi/checkout') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div> -->