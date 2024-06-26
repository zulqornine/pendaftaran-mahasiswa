<?php

require_once "config.php";

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="card text-center">
            <div class="card-header">
                List Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Sekolah Asal</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM calon_mahasiswa";

                        $query = mysqli_query($db, $sql);
                        $no = 1;
                        while ($mahasiswa = mysqli_fetch_array($query)) {
                        
                        ?>
                        <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $mahasiswa['nama'] ?></td>
                        <td><?= $mahasiswa['alamat'] ?></td>
                        <td><?= $mahasiswa['jenis_kelamin'] ?></td>
                        <td><?= $mahasiswa['agama'] ?></td>
                        <td><?= $mahasiswa['sekolah_asal'] ?></td>
                        <td>
                            <a class="btn btn-success" href="form-edit.php?id=<?= $mahasiswa['id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?= $mahasiswa['id'] ?>" onclick="return confirm('Yakin Mau di hapus?')">Hapus</a>
                        </td>
                        
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-body-secondary">
                Di buat dengan ❤️ oleh Rizqi Zulqornain
            </div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>