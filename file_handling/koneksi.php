<?php 

	$server = 'localhost';
	$user = 'root';
	$pass = '123123123';
	$db = 'inventori';
	
	$var_koneksi = new mysqli($server, $user, $pass, $db);
	
	if ($var_koneksi->connect_error) {
		die ('Koneksi DB Gagal : '.$var_koneksi->connect_error);
	}

?>