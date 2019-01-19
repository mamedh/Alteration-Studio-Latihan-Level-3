<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/bootstrap-home/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/bootstrap-home/css/shop-homepage.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/home_login'); ?>">Login</a>
            </li>

              <?php if ($username): ?>
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $username; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <?php  ?>
                <a class="dropdown-item" href="<?php echo base_url('index.php/home_login/logout'); ?>">Logout</a>
              </div>
            </li>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
