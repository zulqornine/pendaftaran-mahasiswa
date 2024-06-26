<?php

include "config.php";

// cek apakah tombol simpan sudah diklik?

if (isset($_POST['simpan'])) {
    // ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];


    // buat query update
    $sql = "UPDATE calon_mahasiswa SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', agama = '$agama', sekolah_asal = '$sekolah_asal' WHERE id='$id'";

    $query = mysqli_query($db, $sql);

    // pengecekan update
    if ($query) {
        header('Location: list-mahasiswa.php');
    } else {
        die('Gagal mengedit!');
    }

} else {
    die('Akses dilarang!');
}