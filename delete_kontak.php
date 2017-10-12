<?php // filename: edit_kontak.php
// 1.koneksi
include("koneksi.php");

//2. query
$query = "DELETE FROM kontak
				WHERE id=$id";
mysqli_query($db,  $query);

header('Location: index.php');
?>