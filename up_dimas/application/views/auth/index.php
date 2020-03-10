<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/') ?>bootstrap.css">
    <title><?= $title ?></title>
</head>
<br><br>

<div class="container">
    
      <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <h3> <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Arxa Resto</h3>
            <p> <span class="glyphicon glyphicon-road" aria-hidden="true"></span> Jln.Bangsri-Jepara km 7</p>
              </div>
                <div class="panel-body">   
                  <div class="col-md-11">
    <?= $this->session->flashdata('message') ?>
    <form action="<?= site_url('auth') ?>" method="post">
    <span class="input-group-addon" id="basic-addon1">Username</span>
      <input  class="form-control" type="text" name="username" autocomplete="off">
      <span class="input-group-addon" id="basic-addon1">Password</span>
      <input  class="form-control" type="password" name="password" autocomplete="off"><br>
        <button type="submit" class="btn sm btn-success">Login</button>
    </form>
   

</body>
</div>
</div>
</div>

<script src="<?= base_url('assets/bootstrap/dist/css/') ?>bootstrap.js"></script>
</body>

</html>