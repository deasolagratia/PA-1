<?php
// Koneksi ke database
$host = "localhost"; // Ganti sesuai dengan host database Anda
$username = "root"; // Ganti sesuai dengan username database Anda
$password = ""; // Ganti sesuai dengan password database Anda
$database = "komentar_db"; // Ganti sesuai dengan nama database yang telah dibuat

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mengambil data dari form
$name = $_POST['name'];
$comment = $_POST['comment'];

// Menyimpan komentar ke database
$query = "INSERT INTO komentar (name, comment) VALUES ('$name', '$comment')";
mysqli_query($koneksi, $query);

// Redirect ke halaman komentar
header("Location: comment.php");
exit();
?>
