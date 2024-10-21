<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 1) {
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
    <title>Data Mahasiswa - User</title>
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
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $data['npm']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['jk']; ?></td>
            <td><?= $data['tgl_lhr']; ?></td>
            <td><?= $data['email']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>  
    <a href="logout.php">Logout</a>
</body>
</html>
