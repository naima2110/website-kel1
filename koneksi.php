<?php
$conn = mysqli_connect("localhost", "root", "", "mk_web");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
