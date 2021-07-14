
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-5.0.0/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('toastr/build/toastr.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
          padding-top: 5rem;
          font-family:'Montserrat', sans-serif;
        }
        .nav-mt{
          margin-top: -71px;
        }
        .starter-template {
          padding: 3rem 1.5rem;
          text-align: center;
        }
    </style>

  </head>

  <body>

    <?= $this->include('navbar') ?>
    <div role="main" class="container">

      <?= $this->renderSection('content') ?>
    </div><!-- /.container -->

    <script src="<?= base_url('jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap-5.0.0/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('toastr/toastr.js') ?>"></script>
    <!-- <script src="<?= base_url('js/myscript.js') ?>"></script> -->
    
    <?= $this->renderSection('script') ?>
    
  </body>
</html>
