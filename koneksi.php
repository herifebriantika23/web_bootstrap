<?php
// Deklarasi variabel koneksi database
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "utspbp";

// Membuat koneksi
$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

// Mengecek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
} 
else { 
    echo "Koneksi berhasil!";
}
?>
