<h1>Form Input</h1>
<hr/>
<form action="process_input.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>
				<textarea name="desk"></textarea>
			</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>
				<input type="number" name="stok">
			</td>
		</tr>
		<tr>
			<td>Foto Produk</td>
			<td>
				<input type="file" name="foto">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Simpan Data">
			</td>
		</tr>
	
	</table>
</form>