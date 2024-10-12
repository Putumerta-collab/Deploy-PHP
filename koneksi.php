<?php
// Buat koneksi ke database
$konek = mysqli_connect("mysql-service", "Admin", "1234", "Smart_temple");

// Cek koneksi
if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";

?>