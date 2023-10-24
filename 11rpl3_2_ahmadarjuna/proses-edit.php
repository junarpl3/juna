<?php 
 
include 'koneksi.php';
$id = $_POST['idBarang'];
$kodeBarang = $_POST['kodeBarang'];
$namaBarang = $_POST['namaBarang'];
$satuanBarang = $_POST['satuanBarang'];
$stokBarang = $_POST['stokBarang'];
$hargaBarang= $_POST['hargaBarang'];
 
mysqli_query($koneksi,"UPDATE toko_juna SET kodeBarang='$kodeBarang',namaBarang='$namaBarang',satuanBarang='$satuanBarang',stokBarang='$stokBarang',hargaBarang='$hargaBarang' WHERE idBarang='$id'");
 

 
header("location:index.php?pesan=update");
?>