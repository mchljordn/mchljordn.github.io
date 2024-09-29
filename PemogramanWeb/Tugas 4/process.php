<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data</title>
</head>
<body>
    <h2>Hasil Input Data Mahasiswa</h2>
    <?php
    $npm = $_POST['npm'];
    $nama = strtoupper($_POST['nama']); 
    $alamat = strtoupper($_POST['alamat']); 
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST['hobi'];

    echo "<p><strong>NPM:</strong> $npm</p>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>Tempat Lahir:</strong> $tempat_lahir</p>";
    echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
    echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
    echo "<p><strong>Hobi:</strong> $hobi</p>";
    ?>
</body>
</html>
