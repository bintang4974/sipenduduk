<br>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Data Penduduk</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Penduduk</th>
                    <th>NIK</th>
                    <th>No KK</th>
                    <th>Status</th>
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
                        <td>
                            <a href="<?= base_url('homepage/detail/' . $pdk->id_penduduk) ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>