<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "db_myweb";

	$koneksi= mysqli_connect($server, $username, $password, $db) or die("Koneksi ke database gagal");
	
?>