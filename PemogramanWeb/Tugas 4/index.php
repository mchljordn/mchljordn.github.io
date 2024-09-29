<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form action="process.php" method="post">
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label for="hobi">Hobi:</label><br>
        <input type="text" id="hobi" name="hobi" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
