<?php 
	include "koneksi.php";

	// mendapatkan id dari url
	$id = $_GET['id'];

	// query delete data bunga
	mysqli_query($koneksi, "DELETE FROM daftar_bunga WHERE id_bunga='$id'");

	// dikembalikan ke halaman index
	header ("location:../index.php");
