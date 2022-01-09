<br>
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Detail Penduduk</h3>
            </div> <!-- /.card-body -->
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td><?= $detail->nama_penduduk ?></td>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <td><?= $detail->nik ?></td>
                    </tr>
                    <tr>
                        <th>No KK</th>
                        <td><?= $detail->no_kk ?></td>
                    </tr>
                    <tr>
                        <th>Vaksin 1</th>
                        <td>
                            <?php if ($detail->vaksin_satu == 1) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A01</a> )
                                ( <a href="" class="badge badge-info">Sinovac</a> )
                            <?php } elseif ($detail->vaksin_satu == 2) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A02</a> )
                                ( <a href="" class="badge badge-info">AstraZeneca</a> )
                            <?php } elseif ($detail->vaksin_satu == 3) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A03</a> )
                                ( <a href="" class="badge badge-info">Pfizer</a> )
                            <?php } elseif ($detail->vaksin_satu == 4) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A04</a> )
                                ( <a href="" class="badge badge-info">Moderna</a> )
                            <?php } elseif ($detail->vaksin_satu == 5) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A05</a> )
                                ( <a href="" class="badge badge-info">Sinopharm</a> )
                            <?php } else { ?>
                                <span class="badge badge-danger">Belum</span><br><hr>
                                (Silakan Vaksin ditempat Terdekat)
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Vaksin 2</th>
                        <td>
                        <?php if ($detail->vaksin_dua == 1) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A01</a> )
                                ( <a href="" class="badge badge-info">Sinovac</a> )
                            <?php } elseif ($detail->vaksin_dua == 2) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A02</a> )
                                ( <a href="" class="badge badge-info">AstraZeneca</a> )
                            <?php } elseif ($detail->vaksin_dua == 3) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A03</a> )
                                ( <a href="" class="badge badge-info">Pfizer</a> )
                            <?php } elseif ($detail->vaksin_dua == 4) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A04</a> )
                                ( <a href="" class="badge badge-info">Moderna</a> )
                            <?php } elseif ($detail->vaksin_dua == 5) { ?>
                                ( <a href="<?= base_url('homepage/vaksin') ?>" class="badge badge-info">A05</a> )
                                ( <a href="" class="badge badge-info">Sinopharm</a> )
                            <?php } else { ?>
                                <span class="badge badge-danger">Belum</span><br><hr>
                                (Silakan Vaksin ditempat Terdekat)
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>No Telp</th>
                        <td><?= $detail->no_telp ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?= $detail->alamat ?></td>
                    </tr>
                    <tr>
                        <th>Bansos</th>
                        <td>
                            <?php if ($detail->id_bansos == 1) { ?>
                                ( <a href="<?= base_url('homepage/bansos') ?>" class="badge badge-info">A01</a> )
                            <?php } elseif ($detail->id_bansos == 2) { ?>
                                ( <a href="<?= base_url('homepage/bansos') ?>" class="badge badge-info">A02</a> )
                            <?php } elseif ($detail->id_bansos == 3) { ?>
                                ( <a href="<?= base_url('homepage/bansos') ?>" class="badge badge-info">B01</a> )
                            <?php } elseif ($detail->id_bansos == 4) { ?>
                                ( <a href="<?= base_url('homepage/bansos') ?>" class="badge badge-info">B02</a> )
                            <?php } elseif ($detail->id_bansos == 5) { ?>
                                ( <a href="<?= base_url('homepage/bansos') ?>" class="badge badge-info">B03</a> )
                            <?php } ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <div class="alert alert-info" role="alert">
                    Jika ingin mengedit data, silakan menghubungi admin di nomor 081xxxxx, sekaligus mengisi GForm dengan link berikut (<a href="https://forms.gle/e6k95uqDtLFoL3sA7">Klik Disini</a>)
                </div>
            </div>
        </div>
    </div>
</section>