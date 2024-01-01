<!DOCTYPE html>
<html>
<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>
    
    <br/>
    
        <?php
        if(isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data Berhasil di Input.";       
            }else if($pesan == "update"){
                echo "Data Berhasil di Update.";
            }elseif ($pesan == "hapus") {
                echo "Data Berhasil di Hapus.";
            }
        }
        ?>

    <br/>

    <a class="tombol" href="input.php">+ Tambah Data Baru</a>

    <h3>Data Mahasiswa</h3>
    <table border="1" class="table">
        <tr>
            <th>No.</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Opsi</th>
        </tr>
        
        <?php
        include "koneksi.php";
        $nomor = 1;
        $data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
            ?>
            
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['npm']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td>
                    <a  class="edit" href="edit.php?npm=<?php echo $d['npm']; ?>">EDIT</a>
					<a class="hapus" href="hapus.php?npm=<?php echo $d['npm']; ?>">HAPUS</a>
                </td>
            </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>