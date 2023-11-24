<?php
	include 'koneksi.php';
	
	$nama = $_POST['nama'];
	$desk = $_POST['desk'];
	$stok = $_POST['stok'];
	
	$id = $_POST['id'];
	
	$sql = "
		UPDATE `barang` SET `nama`='$nama',`deskripsi`='$desk',`stok`=$stok WHERE id=$id
	";
	$hasil = $var_koneksi->query($sql);
	
	var_dump($hasil);
?>