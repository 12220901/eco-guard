<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Eco Guard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<body>
	<section id="login">
		<div class="logo">
			<img src="<?= base_url()?>assets/img/logo.png" alt="">
			<h1>Eco Guard</h1>
		</div>
		<div class="d-flex justify-content-center align-items-center">
			<div class="row px-5">
				<div class="col-md-4 tagline p-5">
					<h1>Living the Green Life with Eco Guard</h1>
				</div>
				<div class="col-md-4 px-5 pt-5">
					<div class="login-image pt-5">
						<img src="<?= base_url()?>assets/img/1.jpeg" alt="" width="250" class="rounded">
					</div>
				</div>
				<div class="col-md-4 form-login">
					<h3 class="p-4">Welcome to Eco Guard</h3>
					<form action="<?= base_url('login/store') ?>" method="POST">
						<div class="form-group mb-4">
							<div class="input-group align-items-center">
								<span class="input-group-addon" id="basic-addon1"><i class="fa-regular fa-circle-user"></i></span>
								<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
							</div>
						</div>
						<div class="form-group mb-4">
							<div class="input-group align-items-center">
								<span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
								<input type="text" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
							</div>
						</div>
						<div class="form-group mb-4">
							<div class="d-flex justify-content-between remembar p-2">
								<label for="">
									<input type="checkbox"> Remember me
								</label>
								<a href="" class="forget">Forgot Password</a>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-login w-100">Sign In</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
