<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <title>Form Input Data</title>
</head>

<body>
<?php include 'nav.php'; ?>

  <div class="container">
    <h1 class="mb-4">Input Data Mahasiswa</h1>
    <form action="simpan.php" method="post">
      <div class="mb-3 row">
        <label for="npm" class="col-sm-2 col-form-label">NPM:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="npm" name="npm" placeholder="contoh : 1963xxxx" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
          <select class="form-select" name="jurusan">
            <option selected=>pilih jurusan</option>
            <option value="TI">Teknik Informatika</option>
            <option value="SI">Sistem Informatika</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukan Tempat Lahir...">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Masukan Tempat Lahir">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select" name="jenisKelamin">
            <option selected=>pilih jenis kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat...">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukan Nomor Telepon...">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email...">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-md-12 offset-md-2">
            <input type="submit" name="Submit" value="Simpan" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-warning">
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
