<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <div class="row mt-4">
      <div class="col-12">
        <?php
        // sediakan nohp target
        $nohp = hp('085710730016');
        // atur pesan dengan helper text urlencode
        $message = '&text=' . urlencode('Halo gan');
        // cek user_agent / device yang digunakan user
        // kalau mobil maka pakai api.whatsapp.com
        // if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
        // // tapi kalau desktop pakai web.whatsapp.com
        // else 
        $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
        ?>

        <a class="btn btn-success" target="_blank" href="<?php echo $linkWA ?>">Chat WA</a>

      </div>
    </div>
       
<?= $this->endSection() ?>