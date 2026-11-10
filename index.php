<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <a href="tambah.php">+ Tambah Siswa</a>
    <br><br>

    <?php if (isset($_GET['pesan'])) { ?>
        <p><b>Status: <?php echo $_GET['pesan']; ?></b></p>
    <?php } ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nisn'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['umur'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['jenis_kelamin'] ?></td>
            <td><?php echo $data['agama'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                 <a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a> |
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>