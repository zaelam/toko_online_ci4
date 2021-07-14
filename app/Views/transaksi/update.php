<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row mt-4">
    <div class="col-12">
        <h4>Update Transaksi No <?= $transaksi->id ?></h4>
        <?= form_open("transaksi/ubah/{$transaksi->id}") ?>
        <table class="table">
            <tr>
                <td>Barang</td>
                <td><?= $transaksi->nama ?></td>
            </tr>
            <tr>
                <td>Pembeli</td>
                <td><?= $transaksi->username ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $transaksi->alamat ?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?= $transaksi->jumlah ?></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><?= $transaksi->total_harga ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <?php
                    $options = [
                        0 => 'Belum dibayar',
                        1 => 'Dibayar',
                        2 => 'Dikirim',
                    ];

                    $shirts_on_sale = ['small', 'large'];
                    echo form_dropdown('status', $options, $transaksi->status, 'class=form-select form-select-sm');
                ?>
                    
                </td>
            </tr>
            <tr style="">
                <td></td>
                <td>
                    <button type="submit" class="btn btn-info text-white">Update</button>
                </td>
            </tr>
        </table>
        <?= form_close() ?>
    </div>
</div>

<?= $this->endSection() ?>