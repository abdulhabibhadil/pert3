<?php // filename: index.php
// 1. koneksi
include("koneksi.php");

// 2. query
$query = "SELECT * FROM kategori";
$hasil = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Kategori</h2>
	<a href="form_tambah_kategori.php">Tambah Kategori</a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>?php echo $row['No']; ?></td>
				<td>?php echo $row['Keterangan']; ?></td>
				<td>?php echo $row['Action']; ?></td>
				<td>
					<a href="Kontak.php">View Kontak</a> | 
					<a href="index.php ?page=form_edit_kategori&id=<?php echo $row['No'];?>&action=edit">Edit</a> | 
					<a href="delete_kategori.php?action=delete&id=<?php echo $row['No'];?>">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>