<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] != 2) {
    header('Location: index.php');
    exit;
}

include 'koneksi.php';

$npm = $_GET['npm'];
$query = "DELETE FROM identitas WHERE npm='$npm'";

if (mysqli_query($koneksi, $query)) {
    header('Location: tampil_data_admin.php');
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
