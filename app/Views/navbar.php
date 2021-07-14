<?php 
    $session = session();
?>

<nav class="navbar navbar-expand-lg navbar-light text-secondary nav-mt shadow-sm">
    <div class="container">
        <a class="navbar-brand" href=""<?= site_url('home') ?>>E-restoran</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if($session->get('isLoggedIn')): ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url('home') ?>">Home<span class="sr-only"></span></a>
            </li>
            <?php if(session()->get('role') == 0): ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Barang
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= site_url('barang/list') ?>">List Barang</a></li>
                <li><a class="dropdown-item" href="<?= site_url('barang/create') ?>">Tambah Barang</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('transaksi') ?>">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('user') ?>">User</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('etalase/index') ?>">Etalase</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('pesanan') ?>">Pesanan Saya</a>
            </li>
            <?php endif ?>
        </ul>
        <?php endif ?>
        <form class="d-flex">
        <ul class="navbar-nav ml-auto">
                <?php if($session->get('isLoggedIn')): ?>
                <li class="nav-item">
                    <a href="<?= site_url('auth/logout') ?>" class="nav-link">Logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a href="<?= site_url('auth/login') ?>" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('auth/register') ?>" class="nav-link">Register</a>
                </li>
                <?php endif ?>
            </ul>
        </form>
        </div>
    </div>
</nav>
  