<?php
// Buat koneksi ke database
$konek = mysqli_connect("mysql-service", "your_user", "your_password", "your_database");

// Cek koneksi
if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";

?>