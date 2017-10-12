<?php // filename: edit_edit_kategori.php
// 1.koneksi
include("koneksi.php");

//2. query
$query = "DELETE FROM kategori
				WHERE id=$id";
mysqli_query($db,  $query);

header('Location: kategori.php');
?>