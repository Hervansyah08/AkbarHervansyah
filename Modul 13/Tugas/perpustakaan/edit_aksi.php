<?php 
include 'koneksi.php';

$nomor = $_POST['nomor'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$peminjam = $_POST['peminjam'];
 

mysqli_query($koneksi,"update peminjaman set nomor='$nomor', judul='$judul', penulis='$penulis', peminjam='$peminjam' where nomor='$nomor'");
 
header("location:index.php?pesan=update"); 
?>