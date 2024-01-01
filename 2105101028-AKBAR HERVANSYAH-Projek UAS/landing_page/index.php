<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "crud_php";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nama       = "";
$alamat     = "";
$no_hp      = "";
$pesanan    = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if (isset($_POST['simpan'])) { //untuk create
  $nama       = $_POST['nama'];
  $alamat     = $_POST['alamat'];
  $no_hp      = $_POST['no_hp'];
  $pesanan    = $_POST['pesanan'];

  if ($nama && $alamat && $no_hp && $pesanan) {
        $sql1   = "insert into table_pemesanan(nama,alamat,no_hp,pesanan) values ('$nama','$alamat','$no_hp','$pesanan')";
        $q1     = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Pesanan Terkirim";
            $nama = $alamat = $no_hp = $pesanan = "";
            // echo "<script>alert('$sukses');</script>";
        } else {
            $error      = "Pesanan Gagal Terkirim";
        }
  } else {
      $error = "Silakan masukkan semua data";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css" />
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
  </head>
  <body style="background-color: #fff8f0" id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="aseets/icon/logo.svg" alt="logo" style="width: 100px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto gap-4 font-poppins" style="transform: translateY(10px)">
            <!-- gap untuk memberikan jarak antara isi navbar -->
            <a class="nav-link active fw-medium" aria-current="page" href="#home">Home</a>
            <!-- fw-medium ini font weight agar tidak terlalu tebal -->
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#product">Product</a>
            <a class="nav-link" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- main conten -->
    <section id="main">
      <div class="container" style="margin-top: 5em">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <div>
              <!-- kita buat div ini agar yang di d-flex hanya yang kolom -->
              <h1 class="fs-1 fw-bold font-poppins">Lahirkan Inspirasi, Gausah Terburu Buru ayo kita Ngopi dulu</h1>
              <!-- fs-1 ini paling besar kalau kecil fs-6 -->
              <p class="font-poppins" style="color: #555555">Kedai kopi inspiratif yang bisa membuat anda larut dalam ketenangan dan melahirkan inspirasi baru dikala anda suntuk</p>
              <!-- <button type="button" class="btn btn-primary px-4 py-2 font-poppins">Pesan Sekarang</button> -->
              <a class="btn btn-primary px-4 py-2 font-poppins" href="#contact" role="button">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-6 text-end">
            <img src="aseets/img/kopi.png" alt="kopi" width="540px" />
          </div>
        </div>
        <div class="row mt-5 font-poppins">
          <div class="col-6 d-flex gap-5 align-items-center">
            <div>
              <!-- div ini agar border tidak kepanjangan -->
              <div class="d-flex flex-column ps-2" style="border-left: 4px solid #814e2b">
                <span class="fw-bold fs-4" style="color: #814e2b">1k+</span>
                <span class="fw-medium fs-5">Pelanggan Senang</span>
              </div>
            </div>
            <div>
              <!-- div ini agar border tidak kepanjangan -->
              <div class="d-flex flex-column ps-2" style="border-left: 4px solid #814e2b">
                <span class="fw-bold fs-4" style="color: #814e2b">20+</span>
                <span class="fw-medium fs-5">Cabang Outlet</span>
              </div>
            </div>
          </div>
          <div class="col-6 d-flex flex-column justify-content-center p-3" style="border: 2px solid #814e2b">
            <h1 class="fw-bold" style="color: #814e2b; font-size: 15px">Classic Americano</h1>
            <p class="mb-0" style="color: #1a1818; font-size: 13px">Kopi Americano klasik dengan aroma yang menggoda, memberikan pengalaman kopi yang sederhana dan memikat.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir main conten -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row font-poppins">
          <div class="col-6">
            <img src="aseets/img/about.png" alt="about" width="614px" />
          </div>
          <div class="col-6 d-flex align-items-center">
            <div>
              <h1 class="fw-bold">About</h1>
              <p style="color: #555555">Kami adalah tempat di mana aroma kopi segar, keramahan, dan semangat komunitas berkumpul untuk menciptakan pengalaman kopi yang tak terlupakan.</p>
              <p style="color: #555555">
                kami berkomitmen untuk menyajikan kopi terbaik dari berbagai sudut dunia. Setiap biji kopi dipilih dengan cermat dan disangrai dengan teliti untuk menghadirkan cita rasa yang khas dan nikmat dalam setiap cangkir.
              </p>
              <!-- <button type="button" class="btn btn-primary px-5 py-2 font-poppins mt-5" style="font-size: 15px">Jelajahi</button> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- product -->
    <section id="product">
      <div class="container font-poppins">
        <div class="row">
          <div class="col mt-4">
            <h1 class="fw-bold text-center font-poppins" style="font-size: 32px">Product</h1>
          </div>
        </div>
        <div class="row" style="transform: translateX(2em)">
          <div class="col mt-5">
            <div class="card" style="width: 18rem; border-color: #814e2b; height: 429.5px">
              <img src="aseets/img/product/espresso.png" style="transform: scale(0.9); height: 190px" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <h5 class="card-title">Espresso</h5>
                <p class="card-text">Espresso adalah minuman kopi murni tanpa menggunakan campuran bahan apapun seperti susu dan gula</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card" style="width: 18rem; transform: translateX(-1em); border-color: #814e2b; height: 429.5px">
              <img src="aseets/img/product/capuccino.png" style="transform: scale(0.9)" class="card-img-top" alt="gambar 2" />
              <div class="card-body">
                <h5 class="card-title">Cappucino</h5>
                <p class="card-text">Kopi ini dibuat dengan lapisan atasnya berupa foam susu dan biasanya di hias dengan bubuk cokelat.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card" style="width: 18rem; transform: translateX(-2em); border-color: #814e2b">
              <img src="aseets/img/product/ameericano.png" style="transform: scale(0.9)" class="card-img-top" alt="gambar 3" />
              <div class="card-body">
                <h5 class="card-title">Americano</h5>
                <p class="card-text">Americano adalah minuman kopi yang terdiri dari espresso dan air panas dalam proporsi yang bervariasi tergantung selera.</p>
                <a href="#contact" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card" style="width: 18rem; transform: translateX(-3em); border-color: #814e2b; height: 429.5px">
              <img src="aseets/img/product/latte.png" style="transform: scale(0.9)" class="card-img-top" alt="gambar 4" />
              <div class="card-body">
                <h5 class="card-title">Latte</h5>
                <p class="card-text">Latte biasanya menggunakan perbandingan espresso dan susu 2:1 agar rasanya yang enak dan ringan.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <!-- <div class="col mt-4">
            <div class="card" style="width: 18rem; border-color: #814e2b">
              <img src="aseets/img/Rectangle 4.png" style="transform: scale(0.9)" class="card-img-top" alt="gambar 5" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 18rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/Rectangle 4.png" style="transform: scale(0.9)" class="card-img-top" alt="gambar 6" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 18rem; transform: translateX(-2em); border-color: #814e2b">
              <img src="aseets/img/Rectangle 4.png" style="transform: scale(0.9)" class="card-img-top" alt="gambar 7" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 18rem; transform: translateX(-3em); border-color: #814e2b">
              <img src="aseets/img/Rectangle 4.png" style="transform: scale(0.9)" class="card-img-top" alt="gambar 8" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div> -->
          <!-- </div> -->
        </div>
      </div>
    </section>
    <!-- akhir product -->

    <!-- contact -->
    <section id="contact">
      <div class="container font-poppins">
        <div class="row mt-5">
          <div class="col text-center">
            <h1 class="fw-bold">Contact</h1>

            <?php if (!empty($sukses)) : ?>
            <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $sukses; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
        <script>
          // Hilangkan notifikasi setelah 5 detik
            setTimeout(function() {
            document.querySelector('.alert').remove();
                }, 5000);
          </script>
          <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-6 d-flex mt-5">
            <img src="aseets/img/garis.png" height="510px" alt="" />
            <img src="aseets/img/kopi_cup_2.png" width="611px" style="transform: translateX(-34em) rotate(-6deg)" alt="" />
          </div>
          <div class="col-6 mt-5">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" style="border-color: #814e2b; background-color: rgba(129, 78, 43, 0.03)" />
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>" style="border-color: #814e2b; background-color: rgba(129, 78, 43, 0.03)" aria-describedby="emailHelp" />
              </div>
              <div class="mb-3">
                <label for="no_hp" class="form-label fw-semibold">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $no_hp ?>" style="border-color: #814e2b; background-color: rgba(129, 78, 43, 0.03)" aria-describedby="emailHelp" />
              </div>
              <div class="mb-3">
                <label for="pesanan" class="form-label fw-semibold">Pesanan</label>
                <textarea class="form-control" id="pesanan" name="pesanan" value="<?php echo $pesanan ?>" style="border-color: #814e2b; height: 10em; background-color: rgba(129, 78, 43, 0.03)" rows="3"></textarea>
              </div>
              <button type="submit" name="simpan" class="btn btn-primary px-5 py-2">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->
    <footer>
      <div class="container font-poppins">
        <div class="row">
          <div class="col text-center p-4" style="border-top: 1px solid #814e2b">
            <div>
              <p style="transform: translateY(8px)">
                Created <i class="bi bi-emoji-smile" style="color: #814e2b"></i> by <a class="text-decoration-none fw-bold" target="_blank" style="color: #814e2b" href="https://www.instagram.com/hervansyah_akbar/">Akbar Hervansyah</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
