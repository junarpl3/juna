<?php 
$koneksi = mysqli_connect("localhost","root","","11rpl3_2_ahmadarjuna");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>