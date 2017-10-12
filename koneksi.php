<?php // filename: koneksi.php

// 1.koneksi
$sk = mysqli_connect("localhost","root","", "","kalbis_web")

//periksa apakah koneksi berhasil
if(mysqli_connect_errno()){
	//jika gagal tampilkan pesan error
	die(mysqli_connect_error());
}
?>