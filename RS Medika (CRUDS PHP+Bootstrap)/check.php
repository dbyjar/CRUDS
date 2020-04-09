<?php

	include_once "function/koneksi.php";
	include_once "function/pembantu.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysqli_query($koneksi, "SELECT * FROM root WHERE username='$username' AND password='$password'");
	
	if(mysqli_num_rows($query) == 0)
	{
		header("location: ".BASE_URL."login.php?pesan=gagal");
	}
	else
	{
	
		$row = mysqli_fetch_assoc($query);
		
		session_start();
		
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		
		header("location: ".BASE_URL."index.php");
	}