<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/custom_global.css?v='.time()); ?>">
</head>

<body>
	<div class="container-fluid d-flex justify-content-center align-items-center custom-height gradient-custom2">
		<div class="col-lg-4 bg-light px-5 py-5 rounded-4">
			<form action="<?= base_url('auth/login'); ?>" method="post">
				<h4 class="text-center">WELCOME TO SISTEM TA POLMAN</h4>
				<h5 class="text-center">Silahkan Login Terlebih Dahulu</h5>
				<?php if($this->session->flashdata('succes_register')) { ?>
					<div class="alert alert-success">
						<?= $this->session->flashdata('succes_register') ?>
					</div>
				<?php } ?>
				<?php if($this->session->flashdata('error_login')) { ?>
					<div class="alert alert-warning">
						<?= $this->session->flashdata('error_login') ?>
					</div>
				<?php } ?>
				<div class="mb-3">
					<label for="username" class="form-label">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Input NIM/NIP">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="mb-3">
					<div class="row-cols-auto d-flex align-items-center flex-row-reverse">
						<div class="col-lg-6 d-flex flex-column-reverse">
							<button type="submit" class="btn btn-primary px-3">Login</button>
						</div>
						<div class="col-lg-6">
							<a href="<?= base_url('auth/regis'); ?>" class="text-decoration-none">Belum memiliki
								akun</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
