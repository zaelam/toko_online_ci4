<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row mt-4">
    <div class="col-12">
        <h1>Pesanan Saya</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Gambar</th>
                    <th>Alamat</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model as $index=>$transaksi): ?>
                    <tr>
                        <td><?= $transaksi->id_transaksi ?></td>
                        <td><?= $transaksi->nama ?></td>
                        <td>
                            <img src="<?= base_url('uploads/'.$transaksi->gambar) ?>" alt="gambar" class="img-fluid" width="150px">
                        </td>
                        <td><?= $transaksi->alamat ?></td>
                        <td><?= $transaksi->jumlah ?></td>
                        <td><?= $transaksi->total_harga ?></td>
                        <td>
                            <a href="<?= site_url('transaksi/view/'.$transaksi->id_transaksi) ?>" class="btn btn-primary">View</a>
                            <a href="<?= site_url('transaksi/invoice/'.$transaksi->id_transaksi) ?>" class="btn btn-info text-white">Invoice</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>