<?php 
include 'koneksi.php';
 
$nomor = $_POST['nomor'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$peminjam = $_POST['peminjam'];
 
mysqli_query($koneksi, "INSERT INTO peminjaman (nomor, judul, penulis, peminjam)
 VALUES ('$nomor','$judul','$penulis','$peminjam')");
 
header("location:index.php?pesan=input");
 
?>