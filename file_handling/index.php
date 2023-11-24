<?php
	include 'koneksi.php';
	
	$key_nama = '';
	$key_min_stok = 0;
	
	if (isset($_GET['key'])) {
		$key_nama = $_GET['key'];
	}
	
	if (isset($_GET['min_stok']) && $_GET['min_stok'] != '') {
		$key_min_stok = $_GET['min_stok'];
	}
	
	
	$sql = "SELECT * FROM barang WHERE status_delete = 0 AND nama LIKE '%$key_nama%' AND stok >= $key_min_stok";
	
	//var_dump($sql);
	
	$hasil = $var_koneksi->query($sql);
	
?>
<h1>List Produk</h1>

<hr/>

<form>
	<input type="text" name="key" placeholder="Keyword Nama">
	<input type="number" name="min_stok" placeholder ="Keyword Minimum Stok">
	<input type="submit" value="Cari">
</form>

<hr/>

Jumlah data yang ditemukan : <?= $hasil->num_rows ?> <br/>

<a href="form_input.php">Input Barang Baru</a> <br/>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th>Stok</th>
		<th>Foto</th>
		<th>Opsi</th>
	</tr>
	
	<?php while($data = $hasil->fetch_assoc()){ ?>
	
	<tr>
		<td><?= $data['id'] ?></td>
		<td><?= $data['nama'] ?></td>
		<td><?= $data['deskripsi'] ?></td>
		<td><?= $data['stok'] ?></td>
		<td>
			<img src="image/<?= $data['foto_produk'] ?>" width="150" />
		</td>
		<td>
			<a href="form_edit.php?id=<?= $data['id'] ?>">Edit Barang</a> | 
			<a href="process_delete.php?id=<?= $data['id'] ?>">Hapus Barang</a>
		</td>
	</tr>
	
	<?php } ?>
	
</table>