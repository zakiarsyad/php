<?php
	include 'koneksi.php';
	
	$target_dir = "image/";
	$nama_file = basename($_FILES["foto"]["name"]);
	$target_file = $target_dir . $nama_file;
	
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["foto"]["size"] > 500000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}
	
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	
		$nama_file = "";
	} else {
		if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			echo "sukses";
		} else {
			echo "Gagal";
			
			$nama_file == "";
		}
	}		
	
	$nama = $_POST['nama'];
	$desk = $_POST['desk'];
	$stok = $_POST['stok'];
	
	$sql = "
		INSERT INTO `barang`(`nama`, `deskripsi`, `stok`, `status_delete`, `foto_produk`) VALUES ('$nama', '$desk', $stok, '0', '$nama_file')
	";
	$hasil = $var_koneksi->query($sql);
	
	var_dump($hasil);
?>