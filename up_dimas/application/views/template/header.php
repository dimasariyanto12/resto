<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/') ?>bootstrap.css">
    <title><?= $title ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">Arxa Resto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url('admin/index') ?>">Order</a>
                    <a class="nav-item nav-link" href="<?= base_url('admin/user') ?>">User</a>
                    <a class="nav-item nav-link" href="<?= base_url('admin/masakan') ?>">Masakan</a>
                    <a class="nav-item nav-link" href="<?= site_url('auth/logout') ?>">logout</a>
                </div>
            </div>
        </div>
    </nav>
    <br><br>

    