<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php 
    $session = session();
    $getsession = $session->getFlashdata();
    // $session = session(); 
?>
<div class="row mt-4">
    <div class="col-12">
        <h4>Transaksi No <?= $transaksi->id_transaksi ?></h4>
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
        </table>
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

