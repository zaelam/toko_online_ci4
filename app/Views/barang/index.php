<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row mt-4">
    <div class="col-12">
        <h1>Barang</h1>
        <table class="table table-hover table-bordered">
            <thead>
                <th>No</th>
                <th>Barang</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php foreach($items as $index=>$barang): ?>
                    <tr>
                        <td><?= ($index+1) ?></td>
                        <td><?= $barang->nama ?></td>
                        <td>
                            <img src="<?= base_url('uploads/'.$barang->gambar) ?>" alt="gambar" class="img-fluid" width="150px">
                        </td>
                        <td><?= $barang->harga ?></td>
                        <td><?= $barang->stok ?></td>
                        <td>
                            <a href="<?= site_url('barang/view/'.$barang->id) ?>" class="btn btn-sm btn-primary">View</a>
                            <a href="<?= site_url('barang/update/'.$barang->id) ?>" class="btn btn-sm btn-success">Update</a>
                            <a href="<?= site_url('barang/delete/'.$barang->id) ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row justify-content-end">
    <div class="col-12 justify-content-end">
        <?php echo $pager->links('bootstrap', 'custom_pagination') ?> 
    </div>
</div>

<?= $this->endSection() ?>