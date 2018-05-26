<?php

$hostDatabase 		= "localhost";
$usernameDatabase 	= "root";
$passwordDatabase	= "";
$namaDatabase 		= "crud";

$koneksi = mysqli_connect($hostDatabase, $usernameDatabase, $passwordDatabase, $namaDatabase);
if(!$koneksi) 
	// jika tidak bisa terhubung ke database
	die("Gagal terhubung ke database");