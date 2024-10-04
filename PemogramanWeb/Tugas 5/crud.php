<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Insert new data
if (isset($_POST['insert'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];

    $sql = "INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email) VALUES ('$npm', '$nama', '$alamat', '$tgl_lhr', '$jk', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update data
if (isset($_POST['update'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];

    $sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', tgl_lhr='$tgl_lhr', jk='$jk', email='$email' WHERE npm='$npm'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diupdate');</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete data
if (isset($_POST['delete'])) {
    $npm = $_POST['npm'];

    $sql = "DELETE FROM identitas WHERE npm='$npm'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Form CRUD Mahasiswa</h2>

<!-- Form Insert / Update -->
<form method="post" action="crud.php">
    <label for="npm">NPM:</label><br>
    <input type="text" name="npm" id="npm" required><br><br>

    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" id="nama" required><br><br>

    <label for="alamat">Alamat:</label><br>
    <input type="text" name="alamat" id="alamat" required><br><br>

    <label for="tgl_lhr">Tanggal Lahir:</label><br>
    <input type="date" name="tgl_lhr" id="tgl_lhr" required><br><br>

    <label for="jk">Jenis Kelamin (L/P):</label><br>
    <input type="text" name="jk" id="jk" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required><br><br>

    <button type="submit" name="insert">Tambah Data</button>
    <button type="submit" name="update">Update Data</button>
    <button type="submit" name="delete">Hapus Data</button>
</form>

<h2>Daftar Mahasiswa</h2>

<!-- Display Data -->
<table>
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
    </tr>
    <?php
    $sql = "SELECT * FROM identitas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["npm"]. "</td>
                    <td>" . $row["nama"]. "</td>
                    <td>" . $row["alamat"]. "</td>
                    <td>" . $row["tgl_lhr"]. "</td>
                    <td>" . $row["jk"]. "</td>
                    <td>" . $row["email"]. "</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
