<?php
	include 'function/koneksi.php';
	include 'function/pembantu.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>RS Medika</title>
		
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
		<nav class="navbar nav-vector navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon navbar-dark"></span>
				</button>
				<a href="#" class="navbar-brand">
					<span>RS Medika</span>
				</a>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto">
						<a href="#" class="nav-item nav-link active">
							Beranda<span class="sr-only">(current)</span>
						</a>
						<a href="<?php echo BASE_URL."module/data-dokter/list.php"; ?>" class="nav-item nav-link">Data Dokter</a>
						<a href="<?php echo BASE_URL."module/data-pasien/list.php"; ?>" class="nav-item nav-link">Data Pasien</a>
						<a href="<?php echo BASE_URL."module/data-kunjungan/list.php"; ?>" class="nav-item nav-link">Data Kunjungan</a>
						<a href="<?php echo BASE_URL."module/rekam-medis/list.php"; ?>" class="nav-item nav-link">Rekam Medis</a>
						<a href="<?php echo BASE_URL."logout.php"; ?>" class="btn btn-primary ">Logout</a>
					</div>
				</div>
			</div>
		</nav>

		<div class="jumbotron jumbotron-fluid" style="width: 100%; height: 300px;">
			<div class="container">
				<div class="row">
					<div class="col-lg display-4">
						<span>Data Rumah Sakit Medika</span><br>
					</div>
				</div>
			</div>
		</div>
		<?php
                        
            $data_dd = mysqli_query($koneksi, "SELECT * FROM data_dokter");
            $data_dp = mysqli_query($koneksi, "SELECT * FROM data_pasien");
            $data_dk = mysqli_query($koneksi, "SELECT * FROM daftar_kunjungan");
            $data_rk = mysqli_query($koneksi, "SELECT * FROM transaksi_reka_medis");

            $tot_dd = mysqli_num_rows($data_dd);
            $tot_dp = mysqli_num_rows($data_dp);
            $tot_dk = mysqli_num_rows($data_dk);
            $tot_rk = mysqli_num_rows($data_rk);
            /*echo "<tr class='total'>
                        <td colspan='4'>Total Bunga</td>
                        <td colspan='2' align='center'>$tot</td>
                    </tr>";*/
        ?>
        <div class="container">
        	<div class="row">
	        	<div class="card col-lg" style="background: blue;">
		        	<h1><?= $tot_dd; ?></h1>
		        	<span>Jumlah Data Dokter</span>
		        	<a href="<?php echo BASE_URL."module/data-dokter/list.php"; ?>">
		        		Lihat Detail
		        	</a>
		        </div>
	        	<div class="card col-lg" style="background: green;">
		        	<h1><?= $tot_dp; ?></h1>
		        	<span>Jumlah Data Pasien</span>
		        	<a href="<?php echo BASE_URL."module/data-pasien/list.php"; ?>">
		        		Lihat Detail
		        	</a>
		        </div>
	        	<div class="card col-lg" style="background: purple;">
		        	<h1><?= $tot_dk; ?></h1>
		        	<span>Jumlah Data Kunjungan</span>
		        	<a href="<?php echo BASE_URL."module/data-kunjungan/list.php"; ?>">
		        		Lihat Detail
		        	</a>
		        </div>
	        	<div class="card col-lg" style="background: red;">
		        	<h1><?= $tot_rk; ?></h1>
		        	<span>Jumlah Data Rekam Medis</span>
		        	<a href="<?php echo BASE_URL."module/rekam-medis/list.php"; ?>">
		        		Lihat Detail
		        	</a>
		        </div>
	        </div>
        </div>
        
        <style type="text/css">
        	.card {
        		padding: 20px 20px;
        		text-align: center;
        		border-radius: 5px;
        		margin: 0px 5px;
        		box-sizing: border-box;
        		color: white;
        	}

        	.card a {
        		padding: 10px 0px;
        		margin-top: 20px;
        		border-top: 1px solid white;
        		text-decoration: none;
        		color: white;
        	}
        </style>
	</body>
</html>