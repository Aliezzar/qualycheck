<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "qualycheck";
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "koneksi tidak berhasil: " . mysqli_connect_error();
}
?>