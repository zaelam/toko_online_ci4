<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-12">
        <h3 class="text-secondary"><b>Etalase</b></h3>
        <hr>
        </div>
    </div>
    <div class="row">
        <?php foreach($model as $m): ?>
            <div class="col-4">
                <div class="card shadow p-1 mb-5 bg-body rounded">
                    <img src="<?= base_url('uploads/'.$m->gambar) ?>" class="card-img-top" alt="..." width="100px" height="300px"/>
                    <div class="card-body">
                    <h5 class="card-title"><?= $m->nama ?></h5>
                    <p class="card-text">Harga : <?= "Rp ".number_format($m->harga,2,',','.') ?></p>
                    <p class="">Stok : <?= $m->stok ?></p>
                    <a href="<?= site_url('etalase/beli/'.$m->id) ?>" class="btn btn-info text-white"><b-icon-cart></b-icon-cart> Pesan</a>
                    </div>
                </div>
                
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>