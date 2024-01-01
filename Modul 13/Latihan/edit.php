<!DOCTYPE html>
<html>
<head>
    <title>Update Data Ke Database dengan PHP </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Update Data Ke Database dengan PHP</h1>
        <h2>Update data dari database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>
    
    <br/>
    <a href="index.php"><b> Lihat Semua Data</b></a>
    <br/>
    
    <h3>Edit Data Mahasiswa</h3>

    <?php
	include 'koneksi.php';
	$npm = $_GET['npm'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where npm='$npm'");
	while($d = mysqli_fetch_array($data)){
		?>

    <form action = "edit_aksi.php" method = "post">
    <table border="0" class="table">
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm" value="<?php echo $d['npm']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>  
    </table>
    </form>
    <?php
        }
    ?>
</body>
</html>