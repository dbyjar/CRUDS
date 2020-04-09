<?php

	$server = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'latweb';

	$koneksi = mysqli_connect ("$server","$user","$password", "$database")
	or die ( " Not able to connect to server ");