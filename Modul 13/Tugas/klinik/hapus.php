<?php 
include 'koneksi.php';

$nik = $_GET['nik'];
 
mysqli_query($koneksi,"delete from pendaftaran where nik='$nik'");
 
header("location:index.php?pesan=hapus"); 
?>