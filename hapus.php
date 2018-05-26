<?php
include 'koneksi.php'; // Mengambil koneksi ke database

$id = $_GET['id']; // Mendapatkan iduser dari parameter url

if(empty($id))
	// Jika parameter id kosong mengarahkan browser ke index, ini dipake buat mencegah error
	header("location: ./");


// jalankan perintah sql hapus
$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE iduser = '$id'");
if($hapus) 
	// jika berhasil menghapus mengarah ke halaman index
	header("location: ./");
else 
	die("gagal menghapus");