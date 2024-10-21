<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 2) {
    header('Location: index.php'); 
    exit;
}

include 'koneksi.php';

$query = "SELECT * FROM identitas";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Mahasiswa - Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Semua Mahasiswa</h1>

    <table border="1">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $data['npm']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['jk']; ?></td>
            <td><?= $data['tgl_lhr']; ?></td>
            <td><?= $data['email']; ?></td>
            <td>
                <a href="edit.php?npm=<?= $data['npm']; ?>">Edit</a> |
                <a href="hapus.php?npm=<?= $data['npm']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="tambah.php">Tambah Data Baru</a> | 
    <a href="logout.php">Logout</a>
</body>
</html>
