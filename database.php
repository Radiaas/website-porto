<?php
$servername = "localhost";
$username = "root";
$password = ""; // Password Anda bisa berbeda
$dbname = "buku_tamu";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
