<?php

include ("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-mahasiswa.php');
}


// Ambil id dari query string
$id = $_GET['id'];

// Baut query untuk mengambil data dari database

$sql = "SELECT * FROM calon_mahasiswa WHERE id=$id";

$query = mysqli_query($db, $sql);

$mahasiswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan..!");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Ubah Data Mahasiswa</h1>
            </div>
            <div class="card-body">
            <form action="proses-edit.php" method="post">
                <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>" placeholder="Isikan Nama Lengkap..." required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $mahasiswa['alamat']; ?>" placeholder="Isikan Alamat..." required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <br>
                    <?= $mahasiswa['jenis_kelamin']; ?>
                    <label for=""><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
                    <label for=""><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <?= $mahasiswa['agama']; ?>
                    <select name="agama" id="">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" class="form-control" value="<?= $mahasiswa['sekolah_asal'] ?>" placeholder="Isikan Sekolah Asal..." required>
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                </div>
                
            </form>
            </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>