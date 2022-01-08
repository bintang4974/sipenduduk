<br>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Data Vaksin</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Vaksin</th>
                    <th>Jenis Vaksin</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($vaksin as $bns) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $bns->kode_vaksin ?></td>
                        <td><?= $bns->jenis_vaksin ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>