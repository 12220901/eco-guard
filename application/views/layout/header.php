<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<body>

<section>
	<nav class="navbar navbar-expand-lg <?= isset($nav_theme) ? $nav_theme : "" ?>">
    <div class="container px-5">
      <a class="navbar-brand" href="<?php echo base_url('home') ?>">
					<img src="<?= base_url()?>assets/img/logo.png" alt="Logo">					
			</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-space-between">
          <li class="nav-item">
            <a class="nav-link <?php if ($title === 'Home') echo 'active'; ?>" href="<?php echo base_url('home') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($title === 'Flora & Fauna') echo 'active'; ?>" href="<?php echo base_url('florafauna') ?>">Flora & Fauna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($title === 'Pelaporan') echo 'active'; ?>" href="<?php echo base_url('pelaporan') ?>">Pelaporan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($title === 'Edukasi') echo 'active'; ?>" href="<?php echo base_url('edukasi') ?>">Edukasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($title === 'Komunitas & Sosialisasi') echo 'active'; ?>" href="<?php echo base_url('komunitassosialisasi') ?>">Komunitas & Sosialisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($title === 'Others') echo 'active'; ?>" href="<?php echo base_url('others') ?>">Others</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
