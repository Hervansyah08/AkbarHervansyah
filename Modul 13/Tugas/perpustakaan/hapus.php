<?php 
include 'koneksi.php';

$nomor = $_GET['nomor'];
 
mysqli_query($koneksi,"delete from peminjaman where nomor='$nomor'");
 
header("location:index.php?pesan=hapus"); 
?>