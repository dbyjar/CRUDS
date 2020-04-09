<?php 
	include "koneksi.php";

	// data dari form
	$id= $_POST['id'];
	$nama= $_POST['nama'];
	$harga= $_POST['harga'];
	$stok= $_POST['stok'];
	$status= $_POST['status'];

	/*echo "  id = $id<br>
			Nama = $nama<br>
			harga = $harga<br>
			stok = $stok<br>
			status = $status<br>
	";*/
	
	// query update
	mysqli_query($koneksi, "UPDATE daftar_bunga SET nama_bunga='$nama' , harga='$harga' , stok='$stok', status='$status' WHERE id_bunga='$id'");
	
	// balikin ke halaman index
	header ("location: ../index.php");
?>
