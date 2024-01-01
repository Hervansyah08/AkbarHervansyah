<?php 
include 'koneksi.php';

$npm = $_GET['npm'];
 
mysqli_query($koneksi,"delete from mahasiswa where npm='$npm'");
 
header("location:index.php?pesan=hapus"); 
?>