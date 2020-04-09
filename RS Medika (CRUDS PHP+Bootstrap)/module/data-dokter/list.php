<?php
	include '../../function/koneksi.php';
	include '../../function/pembantu.php';

	$kode_dokter = isset($_GET['kode_dokter']) ? $_GET['kode_dokter'] : false;

	$nama ="";
	$alamat ="";
	$no_hp ="";
	$button ="Input";

	if ($kode_dokter) {
		$query = mysqli_query($koneksi, "SELECT * FROM data_dokter WHERE kode_dokter='$kode_dokter'");
		$row = mysqli_fetch_assoc($query);

		$nama = $row['nama_dokter'];
		$alamat = $row['alamat'];
		$no_hp = $row['no_hp'];
		$button = "Update";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data Dokter</title>
		
		<link href="<?php echo BASE_URL."bootstrap/css/bootstrap.min.css"; ?>" type="text/css" rel="stylesheet" />
		<link href="<?php echo BASE_URL."bootstrap/js/bootstrap.min.js"; ?>" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php

			session_start();
			if($_SESSION['status']!="login")
			{
				header("location:login.php?pesan=belum_login");
			}

		?>
		<nav class="navbar nav-vector navbar-expand-lg navbar-light">
			<div class="container">
				<button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon navbar-light"></span>
				</button>
				<a href="#" class="navbar-brand">
					<span>RS Medika</span>
				</a>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto">
						<a href="<?= BASE_URL?>" class="nav-item nav-link">Beranda</a>
						<a href="<?php echo BASE_URL."module/data-dokter/list.php"; ?>" class="nav-item nav-link active">Data Dokter<span class="sr-only">(current)</span></a>
						<a href="<?php echo BASE_URL."module/data-pasien/list.php"; ?>" class="nav-item nav-link">Data Pasien</a>
						<a href="<?php echo BASE_URL."module/data-kunjungan/list.php"; ?>" class="nav-item nav-link">Data Kunjungan</a>
						<a href="<?php echo BASE_URL."module/rekam-medis/list.php"; ?>" class="nav-item nav-link">Rekam Medis</a>
						<a href="<?php echo BASE_URL."logout.php"; ?>" class="nav-item nav-link">Logout</a>
					</div>
				</div>
			</div>
		</nav>

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg display-4">
						<span>Data Dokter RS Medika</span><br>
					</div>
				</div>
			</div>
		</div>

		<div class="text-center">
			<h3 style="margin-top: 50px; margin-bottom: 20px;">Form Input Data Dokter</h3>
		</div>

			<div class="container">
		<form action="<?php echo BASE_URL."module/data-dokter/input.php?kode_dokter=$kode_dokter"; ?>" method="POST">
				<div class="form-group">
					<label>Nama Dokter</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo($nama); ?>">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" class="form-control" placeholder="Jl. xxx" value="<?php echo($alamat); ?>">
				</div>
				<div class="form-group">
					<label>No. Handphone/Telp</label>
					<input type="text" name="no_hp" class="form-control" placeholder="+6285xxx" value="<?php echo($no_hp); ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="button" value="<?php echo($button); ?>" class="btn btn-success tombol ml-auto">
				</div>
		</form>

		<div class="text-center">
			<h3 style="margin-top: 50px; margin-bottom: 20px;">Table Data Dokter</h3>
		</div>

		<div class="container">
			<form class="form-group" method="GET" action="<?php echo BASE_URL."module/data-dokter/list.php"; ?>">
				<input type="search" name="cari" class="form-control" placeholder="Cari Nama Dokter" aria-label="Search" style="width: 500px;">
				<button class="btn btn-outline-success" type="submit" style="margin-top: 10px;">Cari</button>
			</form>
		</div>

		<table class="table table-striped">
			<thead>
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Alamat</td>
					<td>No. Handphone/Telp</td>
					<td colspan="2" align="center">Action</td>
				</tr>
			</thead>
			<?php
                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $data = mysqli_query($koneksi, "SELECT * FROM data_dokter WHERE nama_dokter LIKE '%".$cari."%'");
                }
                else {
                    $data = mysqli_query($koneksi, "SELECT * FROM data_dokter");
                }

                $no = 1;
                while ($d = mysqli_fetch_array($data)) {

                    echo "<tbody>
							<tr>
								<th scope='row'>".$no++."</th>
								<td>".$d['nama_dokter']."</td>
								<td>".$d['alamat']."</td>
								<td>".$d['no_hp']."</td>
								<td align='center'><a href='".BASE_URL."module/data-dokter/list.php?kode_dokter=$d[kode_dokter]'>Update</a></td>
								<td align='center'><a href='".BASE_URL."module/data-dokter/hapus.php?kode_dokter=$d[kode_dokter]'>Hapus</a></td>
							</tr>
						</tbody>";
                }
            ?>
		</table>
			</div>
	</body>
</html>