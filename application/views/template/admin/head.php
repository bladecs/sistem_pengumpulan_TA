<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans|Bebas Neue">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/user/timeline.css?v='.time()); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/custom_global.css?v='.time()); ?>">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-white sticky-top" id="navbar-example">
		<div class="container-fluid mx-auto px-5 d-flex">
			<div class="nav-item d-flex align-items-center ">
				<img src="<?php echo base_url('/assets/img/logo/logo.png'); ?>" alt="Logo" width="60" height="60"
					class="d-inline-block align-text-top">
				<a class="fs-5 text-black px-3 my-1 nova_square text-decoration-none" width="60" height="60"
					href="<?= base_url('admin'); ?>">POLMAN TA</a>
			</div>
			<div class="navbar-item" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="<?= base_url('admin'); ?>">Home</a>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<button class="btn dropdown-toggle fs-5" type="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								Jadwal
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?= base_url('user/jadwal_bimbingan'); ?>">Bimbingan</a></li>
								<li><a class="dropdown-item" href="<?= base_url('user/jadwal_seminar'); ?>">Seminar</a></li>
								<li><a class="dropdown-item" href="<?= base_url('user/jadwal_sidang'); ?>">Sidang</a></li>
							</ul>
						</div>
					</li>
					<div class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square"
							href="<?= base_url('admin/nilai'); ?>">Penilaian</a>
					</div>
					<li class="nav-item ">
						<a class="btn log btn-dark px-4 my-1 text-white nova_square d-flex align-items-center"
							href="<?= base_url('auth/logout'); ?>">
							Logout
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
