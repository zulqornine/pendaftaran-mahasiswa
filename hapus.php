<?php

include "config.php";

if (isset($_GET['id'])) {

    // Mengambil id  dari query string
    $id = $_GET['id'];

    // Buat query hapus
    $sql = "DELETE FROM calon_mahasiswa WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // Cek jika berhasil dihapus
    if ($query) {
        header('Location: list-mahasiswa.php');
    } else {
        die("Gagal menghapus.....");
    }
} else {
    die("Akses dilarang");
}