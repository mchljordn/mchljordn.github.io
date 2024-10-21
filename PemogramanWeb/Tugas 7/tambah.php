<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 2) {
    header('Location: index.php');
    exit;
}

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $email = $_POST['email'];

    $query = "INSERT INTO identitas (npm, nama, alamat, jk, tgl_lhr, email) 
              VALUES ('$npm', '$nama', '$alamat', '$jk', '$tgl_lhr', '$email')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form method="POST">
        <label for="npm">NPM:</label>
        <input type="text" name="npm" required><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label for="jk">Jenis Kelamin:</label>
        <input type="text" name="jk" required><br>

        <label for="tgl_lhr">Tanggal Lahir:</label>
        <input type="date" name="tgl_lhr" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="tampil_data_admin.php">Kembali ke Daftar Data</a>
</body>
</html>
