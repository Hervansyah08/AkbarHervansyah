<?php 
include 'koneksi.php';
 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
 
mysqli_query($koneksi, "INSERT INTO pendaftaran (nik, nama, jk, alamat) VALUES ('$nik','$nama','$jk','$alamat')");
 
header("location:index.php?pesan=input");
 
?>
