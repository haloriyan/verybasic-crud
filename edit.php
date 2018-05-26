<?php
include 'koneksi.php'; // Mengambil koneksi ke database

$id = $_GET['id']; // Mendapatkan iduser dari parameter url

// Mengambil data user berdasarkan ID
$sqlQuery = mysqli_query($koneksi, "SELECT * FROM user WHERE iduser = '$id'");
$row = mysqli_fetch_array($sqlQuery);
/*
	Kenapa gak pake while?
*/

$name 	= $row['name'];
$email 	= $row['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Edit User</title>
</head>
<body>

<h1>Edit user</h1>
<form action="edit.php" method="post">
	<input type="hidden" name="iduser" value="<?php echo $id; ?>">
	Name : <input type="text" name="name" value="<?php echo $name; ?>"><br />
	Email : <input type="email" name="email" value="<?php echo $email; ?>"><br /><br />
	<input type="submit" name="update" value="UBAH">
</form>

<?php
if(isset($_POST['update'])) {
	// jika tombol yang bernama update diklik akan melakukan perintah di bawah ini
	$id = $_POST['iduser'];
	$nama = $_POST['name'];
	$surel = $_POST['email'];
	/*
		name dan email disini harus sama dengan value dari atribut "name" yang ada pada <input type='box'>
		contoh :
		<input type='box' name='riyan'>
		berarti pake $_POST['riyan']
	*/

	// jalankan perintah sql untuk mengubah user
	$ubah = mysqli_query($koneksi, "UPDATE user SET name = '$nama', email = '$surel' WHERE iduser = '$id'");
	if($ubah) 
		header("location: ./");
	
	else 
		die("gagal");
	
}

if(empty($id))
	/*
		Jika parameter id kosong mengarahkan browser ke index, ini dipake buat mencegah error
	*/
	header("location: ./");

?>