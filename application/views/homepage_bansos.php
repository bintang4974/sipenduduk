<br>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Data Penduduk</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Bansos</th>
                    <th>Item Bansos</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($bansos as $bns) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $bns->kode_bansos ?></td>
                        <td><?= $bns->item_bansos ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>