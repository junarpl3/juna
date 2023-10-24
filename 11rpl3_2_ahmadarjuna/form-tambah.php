<!DOCTYPE html>
<html>
<head>
<title>Toko Jejepangan</title>
</head>
<body>
 
	<h2>Barang Toko Jejepangan</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Tambah Data Barang</h3>
	<form method="post" action="proses-tambah.php">
		<table>
			<tr>			
				<td>Kode Barang</td>
				<td><input type="text" name="kodeBarang"></td>
			</tr>
			<tr>			
				<td>Nama Barang</td>
				<td><input type="text" name="namaBarang"></td>
			</tr>			
				<td>Satuan Barang</td>
				<td><input type="text" name="satuanBarang"></td>
			</tr>
            <tr>			
				<td>Stok Barang</td>
				<td><input type="text" name="stokBarang"></td>
			</tr>		
            <tr>			
				<td>Harga Barang</td>
				<td><input type="text" name="hargaBarang"></td>
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	
		</table>
	</form>
</body>
</html>