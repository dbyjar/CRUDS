<?php

	include '../../function/koneksi.php';
	include '../../function/pembantu.php'; 
	
	$nama= $_POST['nama'];
	$alamat= $_POST['alamat'];
	$no_hp= $_POST['no_hp'];
	$button = $_POST['button'];

	if ($button == 'Input') {
		mysqli_query($koneksi, "INSERT INTO data_dokter VALUES('','$nama','$alamat','$no_hp')");
	}
	elseif ($button == 'Update') {
		$kode_dokter = $_GET['kode_dokter'];

		mysqli_query($koneksi, "UPDATE data_dokter SET nama_dokter='$nama', alamat='$alamat', no_hp='$no_hp' WHERE kode_dokter='$kode_dokter'");
	}

	header("location: ".BASE_URL."module/data-dokter/list.php");

?>