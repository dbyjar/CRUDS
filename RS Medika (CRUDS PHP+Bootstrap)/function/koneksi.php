<?php

	$server ="localhost";
	$username ="root";
	$password ="";
	$database ="remedial";

	$koneksi =mysqli_connect($server, $username, $password, $database)
	or die("Koneksi ke database Gagal!");

