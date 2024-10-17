<?php
$koneksi = new mysqli("localhost", "root", "", "sekolah");
if ($koneksi->connect_error) {
    echo"koneksi gagal";
}
?>