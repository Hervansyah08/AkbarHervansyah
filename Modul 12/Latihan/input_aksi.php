<?php 
include 'koneksi.php';
 
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
 
mysqli_query($koneksi,"insert into mahasiswa values('$npm','$nama','$alamat','$kelas')");
 
header("location:index.php?pesan=input");
 
?>