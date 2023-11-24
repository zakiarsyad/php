<?php
	include 'koneksi.php';
	
	$id = $_GET['id'];
	
	//$sql = "DELETE FROM `barang` WHERE id=$id";
	$sql = "
		UPDATE `barang` SET `status_delete`='1' WHERE id=$id
	";
	$hasil = $var_koneksi->query($sql);
	
	var_dump($hasil);
	
?>