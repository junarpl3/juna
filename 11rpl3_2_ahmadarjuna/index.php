<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>KodeBarang</th>
			<th>NamaBarang</th>
			<th>SatuanBarang</th>
			<th>StokBarang</th>
            <th>HargaBarang</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_juna");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['KodeBarang']; ?></td>
				<td><?php echo $d['NamaBarang']; ?></td>
				<td><?php echo $d['SatuanBarang']; ?></td>
                <td><?php echo $d['StokBarang']; ?></td>
                <td><?php echo $d['HargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['IdBarang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['IdBarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>