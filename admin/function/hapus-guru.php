<?php 
include "../../koneksi.php";
$id = $_GET['id'];
// $cek_nip = "SELECT * FROM tb_guru WHERE nip='$id'";
// $hasil_nip = $koneksi->query($cek_nip);
$sql = "DELETE FROM tb_guru WHERE nip='$id'";
$ambil = $koneksi->query($sql);
if ($ambil) {
    echo "nerhasil";
} else {
    echo "gagal";
    # code...
}
//  echo "<script>window.location.href = '../dataGuru.php'</script>";
?>