<?php
	$username_benar = "admin";
	$password_benar = "amikom";
	
	$username_input = $_POST['username'];
	$password_input = $_POST['pass'];
	
	if ($username_input != $username_input || $password_input != $password_benar) {

	} else {
		echo 'Login Gagal';
	}
	
?>