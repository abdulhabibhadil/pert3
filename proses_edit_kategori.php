<?php  // filename: proses_edit_kategori.php
// 1.koneksi
include("koneksi.php");

//2. data dari from
$id = $_post['id'];
$ket = mysqli_real_escape_string($db, $_POST['ket']);

//2. query
$query = "UPDATE kategori
			SET keterangan = '$ket'
			WHERE id=$id";
mysqli_query($db, $query);

header('location: kategori.php');
?>