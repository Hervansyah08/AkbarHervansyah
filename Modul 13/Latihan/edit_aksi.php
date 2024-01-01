<?php 
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,"update mahasiswa set npm='$npm', nama='$nama', alamat='$alamat', kelas='$kelas' where npm='$npm'");
 
header("location:index.php?pesan=update"); 
?>