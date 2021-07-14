<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="d-flex h-100">
                <div class="justify-content-center align-self-center">
                    <h2><strong>Delicious Food Menu,</strong><br />in Your Gadget</h2>
                    <p>Ayo segera plih dan pesan makanan favorit anda</p>
                    <a href="#" class="btn btn-lg btn-info text-white"><b-icon-arrow-right></b-icon-arrow-right> Pesan</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="<?= base_url('uploads/assets/hero.jpg') ?>" width="100%" />
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
          <h2>Best <strong>Foods</strong></h2>
        </div>
        <div class="col d-flex justify-content-end">
          <a href="#"  class="btn btn-info text-white float-right "><b-icon-eye></b-icon-eye> Lihat Semua</a>
        </div>
    </div>
    <div class="row mt-4">
        <?php foreach($barangs as $index=>$barang): ?>
        <div class="col-4">
        <!-- <div class="shadow p-3 mb-5 bg-body rounded">Regular shadow</div> -->
            <div class="card shadow-sm p-1 mb-5 bg-body rounded">
                <img src="<?= base_url('uploads/'.$barang->gambar) ?>" class="img-thumbnail" style="height:300px" alt="..."/>
                <div class="card-body">
                <h5 class="card-title"><?= $barang->nama ?></h5>
                <p class="card-text">Harga : Rp. <?= $barang->harga ?></p>
                <a href="<?= site_url('etalase/beli/'.$barang->id) ?>" class="btn btn-info text-white"><b-icon-cart></b-icon-cart> Pesan</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
<?= $this->endSection() ?>