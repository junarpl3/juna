<?php 
include 'koneksi.php';
 
$kodeBarang = $_POST['kodeBarang'];
$namaBarang = $_POST['namaBarang'];
$satuanBarang = $_POST['satuanBarang'];
$stokBarang = $_POST['stokBarang'];
$hargaBarang = $_POST['hargaBarang'];
 
mysqli_query($koneksi,"insert into toko_juna values('','$kodeBarang','$namaBarang','$satuanBarang','$stokBarang','$hargaBarang')");
 
header("location:index.php");
 
?>