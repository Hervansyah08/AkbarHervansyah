<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="card mt-5">
            <div class="card-header text-center">
              <h1>Formulir Pendaftaran Klinik Sehat</h1>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">NIK</label>
                  <input type="text" class="form-control" name="nik" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama"  id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <p>Jenis Kelamin</p>
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input" name="jk"  type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input" type="radio" name="jk"  name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat"  id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-6 mt-5">
          <table  class="table border">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>

            <?php
            include "koneksi.php";
            $nomor = 1;
            $data = mysqli_query($koneksi,"select * from pendaftaran");
        while($d = mysqli_fetch_array($data)){
            ?>

            <tbody>
              <!-- Data dari formulir akan ditampilkan di sini -->
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
              </tr>
            </tbody>
            <?php
                }
            ?>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
