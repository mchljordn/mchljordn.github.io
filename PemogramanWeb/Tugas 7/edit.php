<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] != 2) {
    header('Location: index.php');
    exit;
}

include 'koneksi.php';

$npm = $_GET['npm'];
$query = "SELECT * FROM identitas WHERE npm='$npm'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $email = $_POST['email'];

    $query_update = "UPDATE identitas SET nama='$nama', alamat='$alamat', jk='$jk', tgl_lhr='$tgl_lhr', email='$email' WHERE npm='$npm'";
    
    if (mysqli_query($koneksi, $query_update)) {
        echo "Data berhasil diupdate!";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= $data['alamat']; ?>" required><br>

        <label for="jk">Jenis Kelamin:</label>
        <input type="text" name="jk" value="<?= $data['jk']; ?>" required><br>

        <label for="tgl_lhr">Tanggal Lahir:</label>
        <input type="date" name="tgl_lhr" value="<?= $data['tgl_lhr']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $data['email']; ?>" required><br>

        <button type="submit">Update</button>
    </form>

    <a href="tampil_data_admin.php">Kembali ke Daftar Data</a>
</body>
</html>
