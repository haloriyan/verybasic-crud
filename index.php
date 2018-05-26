<?php
include 'koneksi.php'; // Mengambil koneksi ke database
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>CRUD</title>
	<style>
		td { padding: 10px; }
	</style>
</head>
<body>

<h1>Data User</h1>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>E-Mail</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sqlQuery = mysqli_query($koneksi, "SELECT * FROM user");
		while($row = mysqli_fetch_array($sqlQuery)) 
			echo "<tr>".
				 	"<td>".$row['iduser']."</td>".
				 	"<td>".$row['name']."</td>".
				 	"<td>".$row['email']."</td>".
				 	"<td>".
				 		"<a href='edit.php?id=".$row['iduser']."'>edit</a> | ".
				 		"<a href='hapus.php?id=".$row['iduser']."'>hapus</a>".
				 	"</td>".
				 "</tr>";
		?>
	</tbody>
</table>

<button id="tambah" style="margin-top: 13px;">Tambah User</button>

<script src="http://cdn.riyansatria.tk/embo.js"></script>
<script>
	klik("#tambah", function() {
		mengarahkan("./tambah.php")
	})
</script>
</body>
</html>