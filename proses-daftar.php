<?php

include ("config.php");

if (isset ($_POST['daftar'])) {

    // ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query

    $sql = "INSERT INTO calon_mahasiswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah') ";

    $query = mysqli_query($db, $sql);

    // Buat if else jika berhasil dan gagal
    if ($query) {
        header('Location: index.php?status=berhasil');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dialrang.!");
}