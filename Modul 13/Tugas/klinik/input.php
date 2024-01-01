<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header text-center">
                    <h1>Formulir Pendaftaran Klinik</h1>
                    </div>
                    <div class="card-body">
                    <form action = "input_aksi.php" method = "post">
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
                    <input class="form-check-input" name="jk"  type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Laki - Laki">
                    <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="jk"  name="inlineRadioOptions" id="inlineRadio2" value="Perempuan">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>