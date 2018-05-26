<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah User</title>
</head>
<body>

<h1>Tambah User</h1>

<form action="tambah.php" method="post">
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td> : <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td> : <input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : <input type="password" name="pwd"></td>
			</tr>
		</tbody>
	</table>
	<br />
	<button name="tambahkan">TAMBAHKAN</button>
</form>

<?php
include 'koneksi.php'; // Mengambil koneksi ke database

if(isset($_POST['tambahkan'])) {
	$id = rand(1, 9999); // generate id secara acak
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$added = time(); // timestamp

	$tambah = mysqli_query($koneksi, "INSERT INTO user VALUES('$id','$nama','$email','$password','$added')");
	if($tambah) 
		// jika berhasil nambah user
		header("location: ./");
	else 
		// jika gagal menambah user
		die("gagal menambah");
}

?>
</body>
</html>