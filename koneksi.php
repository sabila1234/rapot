<?php
$koneksi = new mysqli("localhost", "root", "", "sekolah");
if ($koneksi) {
    echo"koneksi berhasil";
}
?>