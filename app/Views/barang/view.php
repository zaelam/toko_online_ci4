<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php 
    $session = session();
    $getsession = $session->getFlashdata();
    // $session = session(); 
?>
<div class="container">
        
        <div class="row mt-5">
        <h1>View Barang</h1>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img src="<?= base_url('uploads/'.$barang->gambar) ?>" alt="image" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-6">
            <h1 class="text-success"><?= $barang->nama ?></h1>
            <h4>Harga : <?= $barang->harga ?></h4>
            <h4>Stok : <?= $barang->stok ?></h4>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
    <script>
    <?php if($getsession):?>
        toastr.success('<?= $getsession['success'][0] ?>','Success',{
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "500",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });

        // toastr.success("<?= $getsession['success'][0] ?>");
    <?php endif ?>
    </script>
<?= $this->endSection() ?>

