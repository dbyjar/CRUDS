<!DOCTYPE html>
<html>
	<head>
		<title><?= $title; ?></title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/temp/bootstrap/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
		<!-- <link href="images/header.png" type="images/x-icon" rel="shortcut icon"> -->

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon navbar-light"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a href="<?= base_url(); ?>" class="nav-item nav-link mr-3">Home</a>
						<a href="<?= base_url(); ?>" class="nav-item nav-link ml-3">Profile</a>
					</div>
					<div class="navbar-nav ml-auto mr-auto">
						<a href="#" class="navbar-brand"><span>CI App</span></a>
					</div>
					<div class="navbar-nav float-right">
						<a href="<?= base_url(); ?>mahasiswa" class="nav-item nav-link mr-3">Mahasiswa</a>
						<a href="#" class="nav-item nav-link ml-3">About</a>
					</div>
				</div>
			</div>
		</nav>