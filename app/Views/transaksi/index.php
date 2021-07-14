<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row mt-4">
    <div class="col-12">
        <h1>Transaksi</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Barang</th>
                    <th>Pembeli</th>
                    <th>Alamat</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model as $index=>$transaksi): ?>
                    <tr>
                        <td><?= $transaksi->id ?></td>
                        <td><?= $transaksi->nama ?></td>
                        <td><?= $transaksi->username ?></td>
                        <td><?= $transaksi->alamat ?></td>
                        <td><?= $transaksi->jumlah ?></td>
                        <td><?= $transaksi->total_harga ?></td>
                        <td>
                        <?php if($transaksi->status == 0){ echo "belum dibayar"; }elseif ($transaksi->status == 1) {echo "dibayar";}elseif ($transaksi->status == 2) {echo "dikirim";} ?>
                        </td>
                        <td>
                            <a href="<?= site_url('transaksi/view/'.$transaksi->id) ?>" class="btn btn-primary">View</a>
                            <a href="<?= site_url('transaksi/invoice/'.$transaksi->id) ?>" class="btn btn-info text-white">Invoice</a>
                            <a href="<?= site_url('transaksi/update/'.$transaksi->id) ?>" class="btn btn-success text-white">Update</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>