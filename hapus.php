<?php
include "koneksi.php";

$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE id = '$id'");

if ($hapus) {
    header("Location: index.php?pesan=Data berhasil dihapus");
    exit;
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>