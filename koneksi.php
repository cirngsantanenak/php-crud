<?php
$koneksi = mysqli_connect("localhost", "root","", "sekolah");

if (!$koneksi) {
    die("koneksi database gagal:" . mysqli_connect_error());
}
?>