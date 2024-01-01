<?php 
include 'koneksi.php';
 
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];

// Ubah nilai $jenis sesuai dengan pilihan yang dipilih
if ($jenis == '1') {
    $jenis_service = 'Service Ringan';
} elseif ($jenis == '2') {
    $jenis_service = 'Service Berat';
} elseif ($jenis == '3') {
    $jenis_service = 'Cek Semua';
} else {
    // Jika tidak ada pilihan yang cocok, atur nilai default
    $jenis_service = 'Pilihan tidak valid';
}

// Simpan nilai $jenis_service yang telah diubah ke dalam database
mysqli_query($koneksi, "INSERT INTO servis (nomor, nama, tanggal, jenis) VALUES ('$nomor','$nama','$tanggal','$jenis_service')");
 
header("location:index.php?pesan=input");
?>
