<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Pesan Jika Berhasil Daftar -->
    <?php
    if (isset($_GET['status'])) : ?>
    <p>
        <?php 
            if ($_GET['status'] == 'berhasil') {
                echo "<script>alert('Berhasil daftar!')</script>";
            } else {
                echo "<script>alert('Gagal daftar! Coba Lagi!')</script>";
            }
        ?>
    </p>

    <?php endif; ?>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="card text-center">
            <div class="card-header">
                Pendaftaran Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title">Universitas Al Irsyad Cilacap</h5>
                <p class="card-text">Menu</p>
                <a href="form-daftar.php" class="btn btn-primary">Daftar</a>
                <a href="list-mahasiswa.php" class="btn btn-primary">Data Pendaftar</a>
            </div>
            <div class="card-footer text-body-secondary">
                Di buat dengan ❤️ oleh Rizqi Zulqornain
            </div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>