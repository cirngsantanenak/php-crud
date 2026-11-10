<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO siswa (nisn, nama, umur, alamat, jenis_kelamin, agama)
            VALUES ('$nisn', '$nama', '$umur', '$alamat', '$jk', '$agama')";
    $simpan = mysqli_query($koneksi, $sql);

    if ($simpan) {
        header("Location: index.php?pesan=Data berhasil ditambahkan");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form method="POST" action="">
        <label>NISN:</label><br>
        <input type="text" name="nisn"><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Umur:</label><br>
        <input type="text" name="umur"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat"><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br><br>

        <label>Agama:</label><br>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select><br><br>

        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>