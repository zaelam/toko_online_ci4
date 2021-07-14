<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <?php 
        $nama = [
            'name' => 'nama',
            'id' => 'nama',
            'value' => $barang->nama,
            'class' => 'form-control'
        ];

        $harga = [
            'name' => 'harga',
            'id' => 'harga',
            'value' => $barang->harga,
            'class' => 'form-control',
            'type' => 'number',
            'min' => 0
        ];

        $stok = [
            'name' => 'stok',
            'id' => 'stok',
            'value' => $barang->stok,
            'class' => 'form-control',
            'type' => 'number',
            'min' => 0
        ];

        $gambar = [
            'name' => 'gambar',
            'id' => 'gambar',
            'value' => null,
            'class' => 'form-control'
        ];

        $submit = [
            'name' => 'submit',
            'id' => 'submit',
            'value' => 'submit',
            'type' => 'submit',
            'class' => 'btn btn-success mt-3'
        ];
        $session = session();
        $errors = $session->getFlashdata('errors');
    ?>
<div class="row">
    <div class="col-8 offset-2">
        <div class="card mt-4">
            <h3 class="card-header">Update Barang</h3>
            <div class="card-body">
                <?= form_open_multipart('Barang/update/'.$barang->id) ?>
                    <div class="form-group">
                        <?= form_label("Nama", "nama") ?>
                        <?= form_input($nama) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Harga", "harga") ?>
                        <?= form_input($harga) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Stok", "stok") ?>
                        <?= form_input($stok) ?>
                    </div>
                    <img src="<?= base_url('uploads/'.$barang->gambar) ?>" width="200px" alt="image" class="img-fluid">
                    <div class="form-group">
                        <?= form_label("Gambar", "gambar") ?>
                        <?= form_upload($gambar) ?>
                    </div>
                    <div class="text-right">
                        <?= form_submit($submit); ?>
                    </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>