<?php
	include 'koneksi.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM barang WHERE id=$id";
	$hasil = $var_koneksi->query($sql);
	
	while($data = $hasil->fetch_assoc()){
		$nama = $data['nama'];
		$stok = $data['stok'];
		$desk = $data['deskripsi'];
	}
	
?>

<h1>Form Edit</h1>
<hr/>
<form action="process_edit.php" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama" value="<?= $nama ?>">
			</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>
				<textarea name="desk"><?= $desk ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>
				<input type="number" name="stok" value="<?= $stok ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="id" value="<?= $id ?>">
				<input type="submit" value="Simpan Data">
			</td>
		</tr>
	
	</table>
</form>