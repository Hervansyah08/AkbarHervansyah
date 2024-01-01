<?php 
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
 
mysqli_query($koneksi,"update pendaftaran set nik='$nik', nama='$nama', jk='$jk', alamat='$alamat' where nik='$nik'");
 
header("location:index.php?pesan=update"); 
?>