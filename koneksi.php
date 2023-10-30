<?php
	$koneksi = mysqli_connect("localhost","root","","verifikasi_akun");
	
	if (mysqli_connect_errno()) {
		echo "koneksi database Mysqli gagal!!!".
		mysqli_connect_error();
	}
?>