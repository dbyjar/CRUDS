<?php

	include "koneksi.php"; 
	
	$nama= $_POST['nama'];
	$harga= $_POST['harga'];
	$stok= $_POST['stok'];
	$status= $_POST['status'];
	
	mysqli_query($koneksi, "INSERT INTO daftar_bunga VALUES('','$nama','$harga','$stok','$status')");
	
	header("location: ../index.php");
	
?>